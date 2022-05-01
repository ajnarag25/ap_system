<?php 
include 'connection.php';
if(
	isset($_POST['title']) ||
	isset($_POST['content']) ||
	isset($_POST['banner']) ||
	isset($_POST['schedule']) ||
	isset($_POST['id'])
){
	$sql='UPDATE tbl_events SET title="'.$_POST['title'].'",content="'.$_POST['content'].'",banner="'.$_POST['banner'].'",schedule="'.date('Y-m-d H:i:s', strtotime($_POST['schedule'])).'" WHERE id='.$_POST['id'];


	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: event.php');
	}
}
?>