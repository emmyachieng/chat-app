<!DOCTYPE html>
<html>
<head>
<title>My Chat</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
<form action="" method="post">
<div class="form-header">
<h2>Sign In</h2>
<p>Login to MyChat</p>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="pass" placeholder="password" autocomplete="off" required>
</div>
<div class="small">Forgot password?<a href="forgot_pass.php">Click Here</a></div><br>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">sign in</button>
</div>
<?php include("signin_user.php");?>
</form>
<div class="text-center small" style="color:#67428B;">Don't have an account?<a href="signup.php">Create one</a>
</div>
</div>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>