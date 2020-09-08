<!DOCTYPE html>
<html>
<head>
<title>My Chat</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
<form action="" method="post">
<div class="form-header">
<h2>Create New Password</h2>
<p>MyChat</p>
</div>
<div class="form-group">
<label>Enter Password</label>
<input type="password" class="form-control" name="pass1" placeholder="password" autocomplete="off" required>
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" class="form-control" name="pass2" placeholder="Confirm password" autocomplete="off" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">change</button>
</div>
</form>
</div>
<?php
session_start();
include("include/connection.php");

if(isset($_POST['change'])){
    $user=$_SESSION['user_email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

    if($pass1 !=$pass2){
        echo"
        <div class='alert alert-danger'>
          <strong>Your New password didn't match with confirm password</strong>
        </div>
      ";
     }

     if($pass1 < 9 AND $pass2 < 9){
        echo"
        <div class='alert alert-danger'>
          <strong>Use 9 or more than 9 characters</strong>
        </div>
      ";
     }

     if($pass1==$pass2){
        $update_pass=mysqli_query($con,"UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
        session_destroy();

        echo"<script>alert('Go ahead to signin')</script>";
        echo"<script>window.open('signin.php','_self')</script>";
     }
}
?>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>