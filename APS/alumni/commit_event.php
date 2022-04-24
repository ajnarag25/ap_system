<?php 
session_start();
include 'config.php';
if(!isset($_GET['id'])){
	die('id not found');
}
$sql="INSERT INTO tbl_event_commits (user_id, event_id) VALUES ('".$_SESSION['user']['user_id']."','".$_GET['id']."')";

$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result){
	header('location: event.php?id='.$_GET['id']);
}
?>