<?php 
include 'connection.php';
if(
	isset($_POST['title']) ||
	isset($_POST['description']) ||
	isset($_POST['id'])
){
	$sql='UPDATE tbl_forum_topics SET title="'.$_POST['title'].'",description="'.$_POST['description'].'" WHERE id='.$_POST['id'];


	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: forum.php');
	}
}
?>