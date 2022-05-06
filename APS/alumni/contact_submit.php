<?php
include 'config.php';

if (isset($_POST['send_msg'])) {

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $cp = $_POST['txtPhone'];
    $msg = $_POST['txtMsg'];
    $conn->query("INSERT INTO tbl_concerns (name, email, phone, message, feedback) VALUES('$name', '$email', '$cp', '$msg', 'N/A')") or die($conn->error);
    echo "<script type=\"text/javascript\">
    alert(\"Successfully Submitted.\");
    window.location = \"contact.php\"
    </script>";
}











?>