<?php 
include 'connection.php';
if(
	isset($_POST['jobtitle']) ||
	isset($_POST['companyname']) ||
	isset($_POST['employer']) ||
	isset($_POST['details']) ||
	isset($_POST['Id'])
){
	$sql='UPDATE tbl_jobapplication SET jobtitle="'.$_POST['jobtitle'].'",companyname="'.$_POST['companyname'].'",employer="'.$_POST['employer'].'",details="'.$_POST['details'].'" WHERE id='.$_POST['Id'];
	
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	if($result){
		header('location: job.php');
	}
}
?>