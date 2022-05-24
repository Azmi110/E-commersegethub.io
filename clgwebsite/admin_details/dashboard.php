<?php
session_start();
if (isset($_SESSION['user_id'])) {
} else {
 
    header("location:login.php");// for two folders
}

$USER= $_SESSION['user_id'];
 $email= $_SESSION['email'];
// $name = $_SESSION['name'];

include "../comm/dbcon.php";

?>


<?php

if (isset($_POST['submit'])) {
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $Desc = $_POST['Desc'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  

  $query = "INSERT INTO `shop`(`product_name`, `product_price`, `Desc`,`image`)
    VALUES('$product_name','$product_price','$Desc','$image')";

  $fire = mysqli_query($con, $query) or die("con not insert the data." . mysqli_error($con));

  if ($fire) 
  {

    echo '<script type="text/javascript">';
    echo 'alert("successfull Delete");';
    echo 'window.location = "view_product.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo 'alert(" please try again!");';
  
     echo 'window.location ="index2.php";';
  
    echo '</script>';
   
  }
  
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>CKRETA</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style sheets -->
    <link rel="stylesheet" href="../css/index.css">

</head>

<body>
<?php include 'header.php'?>
    <!-- main  -->
    <div class="container ">
        <div class="row">
            <div class="column">
                <div class="card">
                    <br>
                    <h3 class="text-center my-3">Product</h3>

                    <form class="my-4" action="#" method="POST" enctype="multipart/form-data" >

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="row">
                            
                       <div class="col-md-6">

                     
                        <label for="product_name">Product Name</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="no-outline" name="product_name" placeholder="Product Name"><br>
                            <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label for="product_price">Product Price</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="no-outline" name="product_price" placeholder="Product Price"><br>
                            <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                        </div>
                        </div>
                        </div>
                      
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" 
                            id="exampleFormControlTextarea1" name="Desc" rows="3"></textarea>
                        </div>
                        <div class="my-4">

                            <label for="image">Product Image</label>
                            <div class="input-group mb-2 mr-sm-2">
                            <input type="file" name="image" class="form-control" placeholder="browse" id="image"><br>
                            </div>
                          
                            <div class="d-grid gap-2 my-5">
                                <button type="submit" name="submit" class="btn btn-lg"
                                    style="background-color:#8b5c7e; color: white; border-radius:4px;">
                                    Submit
                                </button>

                            </div>
                            <!-- <div class="d-grid gap-2">
                                <a href="forget_pass.php" class="text-center" style="text-decoration: none;">Forget Password</a>
                               
                            </div> -->

                    </form>

                </div>
            </div>
        </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>