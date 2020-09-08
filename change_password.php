<!DOCTYPE html>
<?php
  session_start();
  include("include/connection.php");
  include("include/header.php");

  if(!isset($_SESSION['user_email'])){
      header("location:signin.php");
  } 
  else{
?>
<html>
<head>
<title>Account Settings</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body{
    overflow-x: hidden;
}
</style>
<body>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
    <form action="" method="post" enctype="multipart/form-data">
     <table class="table table-bordered">
     <tr align="center">
        <td colspan="6" class="active"><h2>Change Password</h2></td>
       </tr>
       <tr>
        <td style="font-weight:bold;">Current Password</td>
        <td>
         <input type="password" name="current_pass" id="mypass" class="form-control" placeholder="Current Password" required>
        </td>
       </tr>

       <tr>
        <td style="font-weight:bold;">New Password</td>
        <td>
         <input type="password" name="u_pass1" id="mypass" class="form-control" placeholder="New Password" required>
        </td>
       </tr>

       <tr>
        <td style="font-weight:bold;">Confirm Password</td>
        <td>
         <input type="password" name="u_pass2" id="mypass" class="form-control" placeholder="Confirm Password" required>
        </td>
       </tr>

       <tr align="center">
        <td colspan="6">
         <input type="submit" name="change" value="Change" class="btn btn-info">
        </td>
       </tr>
     </table>
    </form>
    <?php
      if(isset($_POST['change'])){
          $c_pass=$_POST['current_pass'];
          $pass1=$_POST['u_pass1'];
          $pass2=$_POST['u_pass2'];

     $user=$_SESSION['user_email'];
     $get_user="SELECT * FROM users WHERE user_email='$user'";
     $run_user=mysqli_query($con,$get_user);
     $row=mysqli_fetch_array($run_user);
 
     $user_password=$row['user_pass'];

     if($c_pass !==$user_password){
         echo"
           <div class='alert alert-danger'>
             <strong>Your Old password didn't match</strong>
           </div>
         ";
     }

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

     if($pass1==$pass2 AND $c_pass==$user_password){
         $update_pass=mysqli_query($con,"UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
         echo"
           <div class='alert alert-danger'>
             <strong>Your Password is Changed</strong>
           </div>
         ";
     }
      }
    ?>
  </div>
  <div class="col-sm-2">
  
  </div>
</div>
</body>
</html>
  <?php } ?>