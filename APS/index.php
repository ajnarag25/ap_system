<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="index_files/css/styles.css">
    <link rel="stylesheet" href="index_files/css/transitions.css">
	<title>Login - ALUMNI PLACEMENT SYSTEM</title>
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
		<form action="functions.php" method="POST" class="login-email">
			<div class="logo-display text-center">
			<img src="index_files/QCU_Logo_2019.png" width="70" alt="">
			<br><br>
			<h4>ALUMNI PLACEMENT SYSTEM</h4>
			</div>
			<br>
			<div class="input-group">
				<input type="username" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<select name="user_type" class="form-select" required>
					<option disabled selected>Select type of user</option>
					<option value="admin">Admin</option>
					<option value="alumni">Alumni</option>
				</select>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="alumni/register.php">Register Here</a>.</p>
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
			<form action="functions.php" method="POST">
				<div class="modal-body">
					<h5>Enter your student number:</h5>
					<input type="text" class="form-control" placeholder="Enter Student Number" name="studentno" required>
					<br>
					<h5>Enter your email address:</h5>
					<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger" name="reset">Reset</button>
				</div>
			</form>
        </div>
        </div>
		
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>