<?php 
include 'connection.php';
if(
	isset($_POST['title']) ||
	isset($_POST['content']) ||
	isset($_POST['banner']) ||
	isset($_POST['schedule']) 
){
	$sql='INSERT INTO tbl_events (title, content, banner, schedule) VALUES ("'.$_POST['title'].'","'.$_POST['content'].'","'.$_POST['banner'].'","'.date('Y-m-d H:i:s', strtotime($_POST['schedule'])).'")';


	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: event.php');
	}
}
?>