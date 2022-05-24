
    
 <?php include 'comm/header.php' ?>
    
                  
    <br>
    <br>
    <div class="container my-5">

        <?php
                    
                    include('comm/dbcon.php');
                    $user_id=$_GET['user_id'];        
                    $query = "SELECT * FROM shop WHERE user_id='$user_id'";
                    $fire = mysqli_query($con, $query);
                    if (mysqli_num_rows($fire) > 0) {
                        
                    while ($row = mysqli_fetch_array($fire)) {
                      ?>
        <div class="row">
            <div class="col-6">
                <div class="card" style="border: none;">
                    <?php echo'<img class="img1" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="430px" width="540px"/>' ?>
                </div>
            </div>
            <div class="col-6">
                <h3 style="color: #FD3A69;"><?php echo $row['product_name'] ?></h3>
                <h5><i class="fa fa-rupee" style="font-size:20;"></i> <?php echo $row['product_price'] ?></h5>
                <p style="text-align: justify;" class="my-4"><?php echo $row['Desc'] ?></p>
                <button type="button" class="btn btn btn-lg btn-block my-5">View Cart</button>

            </div>

        </div>
        <?php
        }
    }
        ?>
    </div>





    
    <?php include 'comm/footer.php' ?>