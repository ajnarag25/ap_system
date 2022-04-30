<?php
include 'config.php';
session_start();


if (isset($_POST['form_submit'])) {
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $student_no = $_POST['s_no'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $gender = $_POST['gender'];
    $career = $_POST['career'];
    
    $file=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
    $file_tem_loc=$_FILES['file']['tmp_name'];
    $file_store="files/".$file;

    move_uploaded_file($file_tem_loc,$file_store);

    $sql = "INSERT INTO tbl_forms (	lastname, firstname, middlename, student_no, address, email, batch, gender, career, field, resume)
     VALUES ('$firstname', '$middlename', '$lastname', '$student_no', '$address', '$email', '$batch', '$gender', '$career', 'none', '$file')";

    $query=mysqli_query($conn,$sql);

  }



?>