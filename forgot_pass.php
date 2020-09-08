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
<h2>Forgot Password</h2>
<p>MyChat</p>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
</div>
<div class="form-group">
<label>Bestfriend Name</label>
<input type="text" class="form-control" name="bf" placeholder="someone..." autocomplete="off" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">submit</button>
</div>
</form>
<div class="text-center small" style="color:#67428B;">Back to Signin<a href="signin.php">Click here</a>
</div>
</div>
<?php
session_start();
include("include/connection.php");

  if(isset($_POST['submit'])){
      $email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
      $recovery_account=htmlentities(mysqli_real_escape_string($con,$_POST['bf']));

      $select_user="SELECT * FROM users WHERE user_email='$email' AND forgotten_answer='$recovery_account'";
      $query=mysqli_query($con,$select_user);
      $check_user=mysqli_num_rows($query);

      if($check_user==1){
          $_SESSION['user_email']=$email;

          echo"<script>window.open('create_password.php','_self')</script>";
      }else{
        echo"<script>alert('Your email or bestfriend name is incorrect')</script>";
        echo"<script>window.open('forgot_pass.php','_self')</script>";
      }
  }
?>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>