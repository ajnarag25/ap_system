<?php 
session_start();
include 'config.php';
if(!isset($_GET['id'])){
	die('id not found');
}
$joboffer=false;

$sql="SELECT * FROM tbl_jobs WHERE id=".$_GET['job_id'];

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
	$forum=mysqli_fetch_object($result);
	
}else{
	die('Job Not Found');
?>

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
<h1><?php echo $joboffer->jobtitle; ?></h1>
<br>
<p><?php echo $joboffer->jobdetails; ?></p>
<div>
	<h4>Comments</h4>
	<?php foreach($comments as $comment): ?>
		<div class="card">
			<div class="card-header">
				<h5 class="card-title"><?php echo $comment['fullname'] ?></h5>
				<p class="card-text"><?php echo $comment['comment'] ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>

    <a href="forums.php"><button type="button" class="btn">Back</button></a>
	</div>
</center>
</body>
</html>