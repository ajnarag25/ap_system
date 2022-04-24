<?php 
session_start();
include 'config.php';
if(!isset($_GET['id'])){
	die('id not found');
}
$event=false;

$sql="SELECT * FROM tbl_events WHERE id=".$_GET['id'];

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
	$event=mysqli_fetch_object($result);
	// print_r($event);
}else{
	die('Event Not Found');
}
if(!isset($_SESSION['user'])){
	header('location: index.php');
}
$sql2='SELECT * FROM tbl_event_commits WHERE user_id='.$_SESSION['user']['user_id'];
$result2=mysqli_query($conn, $sql2);

$commit=false;
if(mysqli_num_rows($result2)){
	$commit=mysqli_fetch_object($result2);
}
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
<h1><?php echo $event->banner; ?></h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
if(!$commit){
	echo '<a href="commit_event.php?id='.$event->id.'"><button type="button1" class="button1">Commit to Event</button></a>';

}else{
	echo '<a href="uncommit_event.php?id='.$commit->id.'&event_id='.$event->id.'"><button type="button2" class="button2">Uncommit to Event</button></a>';
}
?>
    <a href="events.php"><button type="button" class="btn">Back</button></a>
	</div>
</center>
</body>
</html>