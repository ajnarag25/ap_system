<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="index_files/css/styles.css">
    <link rel="stylesheet" href="index_files/css/transitions.css">
	<title>Change Password - ALUMNI PLACEMENT SYSTEM</title>
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
            <p>Create your new password</p>
			</div>
			<br>
			<div class="input-group">
				<input type="password" placeholder="Enter Password" name="pass1" required>
			</div>
            <div class="input-group">
				<input type="password" placeholder="Retype Password" name="pass2" required>
			</div>
			<div class="input-group">
				<button name="changepass" class="btn" >Submit</button>
			</div>
            <div class="input-group">
				<a href="index.php" class="btn">Back</a>
			</div>
		</form>
	</div>
		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>