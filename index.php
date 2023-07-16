<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gashaka</title>
  <link rel="shortcut icon" href="assets/favicon/favicon.jpg" type="image/x-icon">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="container-login" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1 class="h1">Create Account</h1>
			<span class="span">or use your email for registration</span>
			<input type="text" placeholder="Name" class="login-input" />
			<input type="email" placeholder="Email" class="login-input" />
			<input type="password" placeholder="Password" class="login-input" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="post">
			<h1 class="h1">Sign in</h1>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<span class="span">or use your account</span>
			<input type="text" name="uname" placeholder="User name" class="login-input" />
			<input type="password" name="password" placeholder="Password" class="login-input" />
			<a href="#" class="a">Forgot your password?</a>
			<button type="submit" class="button">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1 class="h1">Welcome Back!</h1>
				<p class="p">To keep connected with us please login with your personal info</p>
				<button class="ghost button" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1 class="h1">Hello!</h1>
				<p class="p">Enter your personal details and start journey with us</p>
				<button class="ghost button" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
  <script  src="script.js"></script>

</body>
</html>
