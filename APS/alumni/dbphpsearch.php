<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_aps";

$success=false;

$conn = mysqli_connect($server, $user, $pass, $database);
if(isset($_POST['submit'])){
	if (isset($_POST['companyname']) && isset($_POST['employer']) && isset($_POST['jobtitle']) && isset($_POST['details'])) {
		$companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
		$employer = mysqli_real_escape_string($conn, $_POST['employer']);
		$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
		$details = mysqli_real_escape_string($conn, $_POST['details']);

		$query = "insert into tbl_jobapplication(companyname,employer,jobtitle,details) values('$companyname','$employer','$jobtitle','$details')" ;
		$run = mysqli_query($conn, $query) or die (mysqli_error($conn));
		if ($run){
			$success=true;
		} 
		
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

			<?php if($success): ?>
				<h1> Form Has Been Submitted </h1>
			  <?php endif ?>
			  <br>
			  <br>
<p><a href="jobapplication.php"><button type="button1" class="button1">Submit another one.</button></a></p>
<br>
<p><a href="joboppurtunities.php"><button type="button1" class="button1">Back to Job News Feed</button></a></p>


	</div>
</center>
</body>
</html>