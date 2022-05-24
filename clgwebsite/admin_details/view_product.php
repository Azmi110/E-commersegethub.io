

<?php
include '../comm/dbcon.php';

if ((isset($_GET['del']))) {
  $user_id = $_GET['del'];
  $query = "DELETE FROM shop where user_id=$user_id";
  $fire = mysqli_query($con, $query) or die("can not data." . mysqli_error($con));
  if ($fire) {

    echo '<script type="text/javascript">';
    echo 'alert("successfull Delete");';
    // echo 'window.location = "view_client.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo 'alert(" please try again!");';
  
    //  echo 'window.location ="addclient.php";';
  
    echo '</script>';
   
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- boostrap css  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- js and jquery  -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- external css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  
  <style>
   
   

    

    .img {
      width: 50px;
      height: 50px;
    }
  </style>

</head>

<body>

<?php include 'comm/header.php' ?>

 

  
  <div class="container my-5 shadow rounded  bg-light">


    <h3 class="text-center" style="font-size: 22px;"></h3>
    <hr>

        
    <div class="table-responsive">
      <table class="table table-hover my-3 py-3" id="datatable">
        <thead style="background-color:black ;">
          <tr style="color:white;">
            <th>S No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Desc</th>
            
           

              <th>Delete</th>

        
            <!-- <th>Update</th> -->


          </tr>
        </thead>
        <tbody style="background-color: white;">

           <?php

         

            $query = "SELECT * FROM shop";
          

          $fire = mysqli_query($con, $query);
          if (mysqli_num_rows($fire) > 0) {
              $a=0;
            while ($user = mysqli_fetch_array($fire)){ ?>
              <tr>
                <td>
                  <?php echo ++$a; ?>
                </td>
                <td>
                  <?php echo $user['product_name'] ?>
                </td>
                <td>
                  <?php echo $user['product_price'] ?>
                </td>
                <td>
                  <?php echo $user['Desc'] ?>
                </td>
                <td>
                  <?php echo '<img class="img" src="data:image/jpeg;base64,' . base64_encode($user['image']) . '"/>' ?>
                </td>
               
                  <td>
                    <a href="<?php $_SERVER['PHP_SELF'] ?>?del='<?php echo $user['user_id'] ?>'" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                  </td>
              
                <!-- <td>
                  <a href="update.php?upd='<?php echo $user['user_id']; ?>'" class="btn btn-sm btn-warning">Update</a>
                </td>
                  -->
            <?php
            }
        }
            ?>
              </tr>
        </tbody>
      </table>
    </div>

  </div>
  </div>
  <?php include 'comm/footer.php' ?>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [,10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });
    });
  </script>
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>

</html>