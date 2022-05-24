<?php include 'comm/header.php' ?>
    <div class="container my-3">
        <p class="text-center" style="font-size:50px;"><b>Products</b>
        </p>
        <div class="row">
            <?php

include('comm/dbcon.php');

$query = "SELECT * FROM shop ";
$rs_result = mysqli_query($con, $query);
if (mysqli_num_rows($rs_result) > 0) {

while ($row = mysqli_fetch_assoc($rs_result)){
 
  ?>
            <div class="col-4">
                <div class="card " style="border:none"  >
               
                    <a href="#"><?php echo'<img class="img" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="250px" width="350px"/>' ?></a>
                </div>
                <div class="text-center my-4">
                    <a href="product_view.php?user_id=<?php echo $row['user_id']?>" style="text-decoration: none; color:black;">
                     <p class="p1">View Cart</p>
                    </a>

                    <h5><?php echo $row['product_name'] ?> &nbsp;&nbsp;<i class="fa fa-rupee" style="font-size:20;"></i> <?php echo $row['product_price'] ?></h5>
                </div>
            </div>
            <?php
                                   
                                }
                            }
                                ?>

        </div>


    </div>

    <?php include 'comm/footer.php'  ?>