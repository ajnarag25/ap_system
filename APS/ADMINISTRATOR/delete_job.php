<?php 
session_start();
include 'connection.php';
if(!isset($_GET['Id']) ){
	die('id not found');
}
$sql='DELETE FROM tbl_jobapplication WHERE id='.$_GET['Id'];

$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($result){
	header('location: job.php');
}
?>