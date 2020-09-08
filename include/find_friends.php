<!DOCTYPE html>
<?php
  session_start();
  include("find_friends_function.php");

  if(!isset($_SESSION['user_email'])){
      header("location:signin.php");
  } 
  else{
?>
<html>
<head>
<title>Search For Friends</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/find_people.css">
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
   <?php
    $user=$_SESSION['user_email'];
    $get_user="SELECT * FROM users WHERE user_email='$user'";
    $run_user=mysqli_query($con,$get_user);
    $row=mysqli_fetch_array($run_user);

    $user_name= $row['user_name'];
    echo "<a href='../home.php?user_name=$user_name'>MyChat</a>";
   ?>
   </a>
   <ul class="navbar-nav">
    <li><a style="color: white;text-decoration: none;font-size: 20px;" href="../account_settings.php">Settings</a></li>
   </ul>
 </nav><br>
 <div class="row">
     <div class="col-sm-4">
     </div>
     <div class="col-sm-4">
         <form class="search-form" action="">
          <input type="text" name="search_query" placeholder="Search Friends" autocomplete="off" required>
          <button class="btn btn-dark" type="submit" name="search_btn">Search</button>
         </form>
     </div>
     <div class="col-sm--4">
     </div>
 </div><br><br>
 <?php search_user();?>
</body>
</html>
<?php }?>