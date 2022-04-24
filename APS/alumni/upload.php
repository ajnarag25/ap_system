<?php
include 'config.php';
session_start();

$target_dir = "uploads/";
$target_file = $target_dir . time(). basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    
    $uploadOk = 1;
    if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
    $sql='UPDATE tbl_users SET avatar_path="'.$target_file.'" WHERE user_id='.$_SESSION['user']['user_id'];
    $result = mysqli_query($conn, $sql);
    header('location: profile.php');
    
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
?>