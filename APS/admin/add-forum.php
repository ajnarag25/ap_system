<?php 
include 'connection.php';
if(
	isset($_POST['topic']) ||
	isset($_POST['description']) ||
	isset($_POST['id']) 
){
	$sql='INSERT INTO tbl_forum_topics (topic, description, id) VALUES ("'.$_POST['topic'].'","'.$_POST['description'].'","'.$_POST['id'].'"';


	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: forum.php');
	}
}
?>