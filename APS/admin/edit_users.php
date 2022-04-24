<?php 
include 'connection.php';
if(
	isset($_POST['username']) ||
	isset($_POST['user_id']) ||
	isset($_POST['email']) ||
	isset($_POST['password']) ||
	isset($_POST['branch_id']) ||
	isset($_POST['course_id']) 
){
	$sql='
	UPDATE tbl_users SET 
	username="'.$_POST['username'].'", 
	password="'.password_hash($_POST['password'],PASSWORD_DEFAULT).'",
	email="'.$_POST['email'].'", 
	branch_id="'.$_POST['branch_id'].'",
	course_id="'.$_POST['course_id'].'"
	WHERE user_id='.$_POST['user_id'];


	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: Users.php');
	}
}
?>