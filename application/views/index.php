<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login & Registration</title>
</head>
<body>
	<?= $this->session->flashdata('error') ?>
	<div id="login">
		<h2>Login</h2>
		<form action="login" method="post">
			<input type="email" name="email" placeholder="Enter Your Email"><br>
			<input type="password" name="password" placeholder="Enter Your Password"><br>
			<button>Login</button>
		</form>
	</div>
	<div>
		<h2>Register</h2>
		<form action="register" method="post">
			<input type="text" name="first_name" placeholder="Enter Your First Name"><br>
			<input type="text" name="last_name" placeholder="Enter Your Last Name"><br>
			<input type="text" name="email" placeholder="Enter Your Email"><br>
			<input type="password" name="password" placeholder="Enter Your Password"><br>
			<input type="password" name="confirm_password" placeholder="Confirm Your password"><br>
			<button>Register</button>
		</form>

	</div>
</body>
</html>