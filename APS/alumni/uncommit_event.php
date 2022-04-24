<?php 
session_start();
include 'config.php';
if(!isset($_GET['id']) || !isset($_GET['event_id'])){
	die('id not found');
}
$sql='DELETE FROM tbl_event_commits WHERE id='.$_GET['id'];

$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result){
	header('location: event.php?id='.$_GET['event_id']);
}
?>