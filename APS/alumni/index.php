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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="transitions.css">
	<title>Login - Alumni</title>
</head>
<style>
	.container{
		width: 400px;
		min-height: 450px;
		background: #FFF;
		border-radius: 5px;
		box-shadow: 0 0 5px rgba(0,0,0,.3);
		padding: 40px 30px;
}
</style>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-register-text" style="font-size: 2rem; font-weight: 800;">Login - Alumni</p>
			<br>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<div class="input-group">
				<a href="../index.php" class="btn" style="text-decoration: none;">Back</a>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			<p class="login-register-text">Forgot Password? <a href="" data-bs-toggle="modal" data-bs-target="#forgotModal">Reset Password</a>.</p>
		</form>
	</div>


	 <!-- Modal Forgot Password-->
     <div class="modal fade" id="forgotModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="" method="POST">
				<div class="modal-body">
					<h5>Enter your student number:</h5>
					<input type="text" class="form-control" placeholder="Enter Student Number" required>
					<br>
					<h5>Enter your email address:</h5>
					<input type="email" class="form-control" placeholder="Enter Email" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger" name="">Reset</button>
				</div>
			</form>
        </div>
        </div>
		
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>