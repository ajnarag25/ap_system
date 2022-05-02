<?php
session_start();
include "connection.php";


// Verify User
if (isset($_GET['verify'])) {
    $id = $_GET['verify'];
    $conn->query("UPDATE tbl_users SET is_verified=1 WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
}

// Update User
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $first = $_POST['fname'];
    $middle = $_POST['mname'];
    $last = $_POST['lname'];
    $user = $_POST['uname'];
    $student_no = $_POST['sno'];
    $email = $_POST['mail'];
    $conn->query("UPDATE tbl_users SET student_id='$student_no', username='$user', email='$email', firstname='$first', middlename='$middle', lastname='$last'  WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
}

// Delete User
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tbl_users WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
   }

?>