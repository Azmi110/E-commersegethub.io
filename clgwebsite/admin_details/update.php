
<?php
include "comm/dbcon.php";
if ((isset($_GET['upd']))) {
    $user_id = $_GET['upd'];
    $query = "SELECT * FROM shop where user_id=$user_id";
    $fire = mysqli_query($con, $query) or die("can not database." . mysqli_error($con));
    $user = mysqli_fetch_assoc($fire);
}
//---update----
if ((isset($_POST['update']))) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $Desc = $_POST['Desc'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $query = "UPDATE shop SET product_name='$product_name',product_price='$product_price',
    Desc = '$Desc' ,image='$image' where user_id=$user_id";
    $fire = mysqli_query($con, $query) or die("can not." . mysqli_error($con));

    if ($fire) {
        header("location:view_product.php");
?>

<?php
    } else {
      
        // header("location:View_User.php");
    }
}

?>
<link rel="stylesheet" href="css/index.css">

<?php include 'comm/header.php' ?>
    <div class="container ">
        <div class="row">
            <div class="column">
                <div class="card">
                    <br>
                    <h3 class="text-center my-3">Product</h3>

                    <form class="my-4" name="signup" id="signup" action="#" method="POST" enctype="multipart/form-data">

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="row">
                            
                       <div class="col-md-6">

                     
                        <label for="product_name">Product Name</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input value="<?php echo $user['product_name'] ?>" type="text" class="no-outline" name="product_name" placeholder="Product Name"><br>
        
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label for="product_price">Product Price</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input value="<?php echo $user['product_price'] ?>" type="text" class="no-outline" name="product_price" placeholder="Product Price"><br>
                           
                        </div>
                        </div>
                        </div>
                      
                        <div class="my-4">

                            <label for="image">Product Image</label>
                            <div class="input-group mb-2 mr-sm-2">
                            <input  type="file" name="image" class="form-control" placeholder="browse" id="image"><br>
                            </div>
                          
                            <div class="d-grid gap-2 my-5">
                                <button type="submit" name="update" class="btn btn-lg"
                                    style="background-color:#4580CA; color: white; border-radius:4px;">
                                    Upadte
                                </button>

                            </div>
                            <!-- <div class="d-grid gap-2">
                                <a href="forget_pass.php" class="text-center" style="text-decoration: none;">Forget Password</a>
                               
                            </div> -->

                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>


        <?php include 'comm/footer.php' ?>