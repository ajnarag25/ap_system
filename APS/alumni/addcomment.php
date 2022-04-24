<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_aps";

include 'config.php';
session_start();
 
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

$success=false;

$conn = mysqli_connect($server, $user, $pass, $database);
if(isset($_POST['submit'])){
	if (!empty($_POST['comment'])) {
		$topicid = $_POST['topicid'];
		$comment = $_POST['comment'];
		$userid = $_SESSION['user']['user_id'];

		$query = "insert into tbl_forum_comments(comment, topic_id, user_id) values('$comment', '$topicid', '$userid')" ;

		$run = mysqli_query($conn,$query) or die (mysqli_error($conn));
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
				<h1> Comment Has Been Submitted. </h1>
			  <?php endif ?>
			  <br>
			  <br>
<p><a href="forum.php?id=<?php echo $topicid?>"><button type="button1" class="button1">Back to Previous forum.</button></a></p>
<p><a href="forums.php"><button type="button1" class="button1">Back to Forums.</button></a></p>


	</div>
</center>
</body>
</html>