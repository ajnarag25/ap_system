<?php 
session_start();
include 'connection.php';
if(!isset($_GET['id']) ){
	die('id not found');
}
$sql='SELECT * FROM tbl_users  WHERE user_id='.$_GET['id'];
$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_object($result);
	$sql2=$row->is_verified==1 ?
	'UPDATE tbl_users SET is_verified=0 WHERE user_id='.$row->user_id :
	'UPDATE tbl_users SET is_verified=1 WHERE user_id='.$row->user_id;
	
	$result2=mysqli_query($conn, $sql2) or die(mysqli_error($conn));
}
if($result){
	header('location: Users.php');
}
?>