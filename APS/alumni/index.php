<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['user'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_users WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row['password'])){
			$_SESSION['user'] = $row;
			header("Location: welcome.php");
		}else{
			echo "<script defer>alert('Woops! Your Password is Incorrect.')</script>";
		}
	
	} else {
		echo "<script defer>alert('Woops! The username or password you entered is wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="transitions.css">
	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-register-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>