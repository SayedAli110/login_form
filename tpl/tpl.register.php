<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - login-signup</title>
  <link rel="stylesheet" href="../assets/style/auth.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="background">
	<div id="panel-box">
		<div class="panel">
			<div class="auth-form on" id="login">
				<div id="form-title">Log In</div>
				<form action="http://project.php/login-form-excercise/auth.php?action=login" method="POST">
					<input name="email" type="text" required="required" placeholder="Email"/>
					<input name="password" type="password" required="required" placeholder="Password"/>
					<button type="Submit">Log In</button>
				</form>
			</div>
			<div class="auth-form" id="signup" >
				<div id="form-title">Register</div>
				<form action="http://project.php/login-form-excercise/auth.php?action=register" method="POST">
					<input name="name" type="text" required="required" placeholder="Username"/>
					<input name="password" type="password" required="required" placeholder="Password"/>
					<input name="email" type="text" required="required" placeholder="Email">
          <input name="phone" type="text" required="required" placeholder="Phone">
          <label for="">male<input type="radio" name="gender" value="1"></label>
          <label for="">female<input type="radio" name="gender" value="0"></label>
					<button type="Submit">Sign Up</button>
				</form>
			</div>
		</div>
</body>
</html>