<!DOCTYPE html>
<html>
<head>
<title>Create new account</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="signup-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign Up</h2>
<p>Fill out this form and start chatting with your friends</p>
</div>
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control" name="user_name" placeholder="Example:alisha" autocomplete="off" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="user_pass" placeholder="password" autocomplete="off" required>
</div>
<div class="form-group">
<label>Email Address</label>
<input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
</div>
<div class="form-group">
<label>country</label>
<select class="form-control" name="user_country" required>
<option disabled="">Select a country</option>
<option>U.S.A</option>
<option>Pakistan</option>
<option>Africa</option>
<option>India</option>
<option>Canada</option>
<option>China</option>
</select>
</div>
<div class="form-group">
<label>Gender</label>
<select class="form-control" name="user_gender" required>
<option disabled="">Select your gender</option>
<option>male</option>
<option>female</option>
<option>other</option>
</select>
</div>
<div class="form-group">
<label class="checkbox-inline"><input type="checkbox" required>I accept the<a href="#">terms of use</a> &amp;<a href="#">Privacy Policy</a></label>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">sign Up</button>
</div>
<?php include("signup_user.php");?>
</form>
<div class="text-center small" style="color:#67428B;">Already have an account? <a href="signin.php">Signin Here</a></div>
</div>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>