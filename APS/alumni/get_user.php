<?php 
include_once 'config.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
    $username = $_SESSION['user']['username'];
    $password = $_SESSION['user']['password'];
    $sql = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
         $_SESSION['user'] = $row;
        
        if($row['is_verified']==0){
        header("Location: unverified.php");
        }
    } else {
        echo "<script>alert('Woops! The e-mail or password you entered is wrong.')</script>";
        unset($_SESSION['user']);
         // header("Location: index.php");
    }