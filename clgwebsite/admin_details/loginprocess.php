
<?php
error_reporting(0);
?>


<?php

session_start();
 include('../comm/dbcon.php');
  if (isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password = $_POST['password'];
    $email_search = "SELECT * FROM admin_details WHERE email='$email' AND password='$password'";
  
    $query = mysqli_query($con, $email_search);
    $result1 = mysqli_fetch_assoc($query);
    $user_id = $result1['user_id'];
    $email = $result1['email'];
    $name=$result1['name'];
    $password = $result1['password'];
    

  if ($user_id == $user_id && $password == $password) {

    $_SESSION['email'] =$email;
    $_SESSION['name']=$name;
    $_SESSION['user_id'] = $user_id;
    
   
    echo '<script type="text/javascript">';
    echo 'alert("Login Sucess Fully");';
    echo 'window.location = "dashboard.php";';
    echo '</script>';
   
  } else {
    // echo '<script type="text/javascript">';
    // echo 'alert("User Name And Password Not Matched");';
    echo 'window.location = "login.php";';
    // echo '</script>';

    echo ' not Login';

  }
}
?>
