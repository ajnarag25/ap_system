<?php 
include_once 'config.php';
include_once 'get_user.php';


if (!isset($_SESSION['user'])) {
    header("Location: welcome.php");
}

$sql = 'SELECT * FROM tbl_users LEFT JOIN tbl_courses ON tbl_users.course_id=tbl_courses.course_id LEFT JOIN tbl_branch ON tbl_users.branch_id=tbl_branch.branch_id WHERE tbl_users.user_id='.$_SESSION['user']['user_id'];
$result = mysqli_query($conn, $sql) OR die(mysqli_error($conn));
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;  
      align-items: center;
      height: 20%;
      padding: -5px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7);
      }
      .right, form{
        margin-bottom: 97px;
      }
      .title {
      display: block;
      align-items: center;
      margin-bottom: 5px;
      text-align: center;
      }
      .info {
      display: flex;
      flex-direction: column;
      align-items: center;
      }
      .white{
        color: #fff;
      }
      .inputprofile, .selectprofile {
      padding: 5px;
      margin-bottom: 0px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      .inputprofile::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: dimgray; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 20px 20px;
      margin-top: 20px;
      border-radius: 20px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      .buttoncen{
        align-items: center;
        margin-left: 235px;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 85%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      img {
  border-radius: 5%;
  width: 12.5rem;
  height: auto;
}
      }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <title>My Profile</title>
<body>
	<div class="banner">
		<div class="navbar">
		<h1 style="color: cyan;"> Alumni Information System </h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="forums.php">Forum</a></li>
            <li><a href="joboppurtunities.php">Job Opportunities</a>
                <div class="sub-menu">
              <ul>
                <li><a href="search.php">Search</a></li>
              </ul>
            <li><a href="profile.php"><?php echo $_SESSION['user']['username'];?></a>
            <div class="sub-menu">
              <ul>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
        </ul>
        </ul>
        </div>
<div class="main-block">
      <div class="left-part">
        <p><i class="fas fa-graduation-cap" style="color:white;"></i></p>
        <?php if(isset($_SESSION['user']['avatar_path'])): ?>
            <img src="<?php echo $_SESSION['user']['avatar_path'] ?>" class="test">

        <?php endif?>
        <form action="upload.php" method="post" enctype="multipart/form-data" style="color: white;">
            <p>Select image to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg">
    <div><input type="submit" value="Upload Image" name="submit"></div>
    </form>
      </div>
      <form action="update_profile.php" class=right method="POST">
        <?php 
        $currentUser = $_SESSION['user']['username'];
        $updatesql = "SELECT * FROM users WHERE username = '$currentUser'";
        $gotResults = mysqli_query($conn, $sql);

        if($gotResults){
          if(mysqli_num_rows($gotResults)>0){
            while($row = mysqli_fetch_array($gotResults)){
            }
          }
        }
        ?>
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2 class="white">Alumni Profile</h2>
        </div>
        <div class="info">
          <input type="hidden" name="user_id" value="<?php echo $user['user_id']?>">
          <input class="fname" type="text" name="fullname" placeholder="<?php echo $user['fullname']?>" style="width: 400px" required>
          <input type="text" name="email" placeholder="<?php echo $user['email']?>" style="width: 400px" required>
          <input type="text" name="gender" placeholder="<?php echo $user['gender']?>" style="width: 400px" required>
          <input type="text" name="course" placeholder="<?php echo $user['course_name']?>" style="width: 400px" disabled>
          <input type="text" name="branch" placeholder="<?php echo $user['branch_name']?>" style="width: 400px" disabled>
          <input type="datetime" name="batch" placeholder="<?php echo $user['batch']?>" style="width: 400px" disabled>
        </div>
        <button type="submit" name="update" class="buttoncen">Update</button>
      </form>
    </div>
  </body>
</html>