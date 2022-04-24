<?php 
session_start();
include 'connection.php';
if(!isset($_GET['id']) ){
	die('id not found');
}
$sql='DELETE FROM tbl_events WHERE id='.$_GET['id'];

$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result){
	header('location: event.php');
}
?>