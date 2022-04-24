<?php 
session_start();
include 'config.php';
if(!isset($_GET['id'])){
	die('id not found');
}
$forum=false;

$sql="SELECT * FROM tbl_forum_topics WHERE id=".$_GET['id'];

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)){
	$forum=mysqli_fetch_object($result);
	
}else{
	die('Forum Not Found');
}
$sql2='SELECT * FROM tbl_forum_comments INNER JOIN tbl_users ON tbl_forum_comments.user_id=tbl_users.user_id WHERE tbl_forum_comments.topic_id='.$forum->id;

$result2=mysqli_query($conn, $sql2);

$comments=[];
if(mysqli_num_rows($result2)){
	$comments=mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
?>

<html>
<head>
<style>
button {
	width: 200px;
	padding: 15px 20px;
	text-align: center;
	margin: 10px 10px !important;
	border-radius: 10px !important;
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
	<?php include 'helpers/libraries.php';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="transitions.css">
	<title>Login</title>
	<div class="container">
		<center>
<h1><?php echo $forum->title; ?></h1>
<br>
<p><?php echo $forum->description; ?></p>
<div>
	<h4>Comments</h4>
	<?php
	 foreach($comments as $comment): ?>
		<div class="card border-primary mb-2">
			<div class="card-header">
				
				<h5 class="card-title"><?php echo $comment['fullname'] ?></h5>
				<p class="card-text"><?php echo $comment['comment'] ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
	<a href="forums.php"><button type="button" name="submit">Back</button></a>
	<form action="addcomment.php" method="POST">
	<input type="hidden" name="topicid" value="<?php echo $forum->id ?>">
	<textarea style="width: 100%; height: 80px" name="comment"></textarea>
    <button type="submit" name="submit">Add A Comment</button></a>
	</form>
	</div>
</center>
</body>
</html>