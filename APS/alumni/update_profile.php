<?php 

include 'config.php';

session_start();

if(isset($_POST['update'])){
	$updatedFN = $_POST['firstname'];
	$updatedMN = $_POST['middlename'];
	$updatedLN = $_POST['lastname'];
	$updatedEmail = $_POST['email'];

	if (!empty($updatedFN) && !empty($updatedMN) && !empty($updatedLN) && !empty($updatedEmail)){
		$sql = 'UPDATE tbl_users SET 
		firstname = "'.$_POST['firstname'].'",
		middlename = "'.$_POST['middlename'].'",
		lastname = "'.$_POST['lastname'].'",
		email = "'.$_POST['email'].'"
		WHERE user_id="'.$_POST['user_id'].'"
		';
		$result = mysqli_query($conn, $sql);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
button {
	width: 200px;
	padding: 15px 20px;
	text-align: center;
	margin: 10px 10px;
	border-radius: 10px;
	font-weight: bold;
	border: none;
	background: #93b2b2;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;
	transition: .3s;
}
.button1:hover{
      background-color: green;
    }
.button2:hover{
      background-color: red;
    }
</style>
</head>
<body>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="transitions.css">
	<title>Login</title>
	<div class="container">
		<center>
			<br>
			<br>

			<?php if($result): ?>
				<h1 style="color: black;">Your profile has been updated!</h1>
			  <?php endif ?>
			  <br>
			  <br>
<p><a href="profile.php"><button type="button1" class="button1">Back to your profile.</button></a></p>
<br>
<p><a href="home.php"><button type="button1" class="button1">Back to Home.</button></a></p>


	</div>
</center>
</body>
</html>