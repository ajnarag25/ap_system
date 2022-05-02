<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="dist/css/styles.css">
    <link rel="stylesheet" href="dist/css/transitions.css">
	<title>Login - Admin</title>
</head>
<style>
	body{
		background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(assets/images/qcufront.jpg);
	}
	.container{
		width: 400px;
		min-height: 450px;
		background: #FFF;
		border-radius: 5px;
		box-shadow: 0 0 5px rgba(0,0,0,.3);
		padding: 40px 30px;
	}
	.container a{
		text-decoration: none;
	}
</style>
<body>
	<div class="container">
		<form action="validate.php" method="POST" class="login-email">
			<p class="login-register-text" style="font-size: 2rem; font-weight: 800;">Login - Admin</p>
			<br>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
				<br>
				<a href="../index.php" class="btn">Back</a>
			</div>
		</form>
	</div>
</body>
</html>