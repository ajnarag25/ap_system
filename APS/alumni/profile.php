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
<link rel="stylesheet" href="webdesign.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
      .custom-container{
        width: 80%;
        margin: auto;
   
    }
    .logo-text{
		display: flex;
		align-items: center;
		color: white;
        margin-top: 2%;
    }
    .uls{
      margin-top: 2%;
    }
    .logo-text h2{
      margin-left: 20px;
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
        <div class="logo-text">
          <img src="QCU_Logo_2019.png" width="70" height="70" alt="">
          <h2> ALUMNI PLACEMENT SYSTEM</h2>
        </div>
          <ul class="uls">
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="apply.php">Apply for a job</a>
              <li><a href="contact.php">Contact</a>
              <li><a href="profile.php"><?php echo $_SESSION['user']['username'];?></a>
              <div class="sub-menu">
                <ul>
                  <li><a href="profile.php">My Account</a></li>
                  <li><a href="logout.php">Logout</a></li>
            </ul>
          </ul>
    </div>
    <div class="custom-container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-body text-center" style="background-color: rgb(216,216,216);" >
          <i class="mdi mdi-archive-edit me-1" style="font-size: 100px"></i>
            <h3>Check Status</h3>
            <p>Submitted form</p>
            <button data-bs-toggle="modal" data-bs-target="#formModal<?php echo $_SESSION['user']['username'];?>">View</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center" style="background-color: rgb(216,216,216);" >
          <i class="mdi mdi-forum me-1" style="font-size: 100px"></i>
            <h3>Check Status</h3>
            <p>Submitted concern</p>
            <button data-bs-toggle="modal" data-bs-target="#concernModal<?php echo $_SESSION['user']['username'];?>">View</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body text-center" style="background-color: rgb(216,216,216);" >
          <i class="mdi mdi-cogs me-1" style="font-size: 100px"></i>
            <h3>Manage Account</h3>
            <p>Update your credentials</p>
            <button data-bs-toggle="modal" data-bs-target="#accountModal<?php echo $_SESSION['user']['username'];?>">Manage</button>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal Account-->
    <div class="modal fade" id="accountModal<?php echo  $_SESSION['user']['username'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Account Settings</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                <h2 class="white">Alumni Profile</h2>
                <br>
                <?php if(isset($_SESSION['user']['avatar_path'])): ?>
                  <img class="user-img" src="<?php echo $_SESSION['user']['avatar_path'] ?>" width="100" class="test">
                <?php endif?>
                <form action="upload.php" method="post" enctype="multipart/form-data" style="color: white;">
                  <p>Select image to upload:</p>
                  <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg" style="color: black">
                <div>
                  <input type="submit" value="Upload Image" name="submit">
                </div>
                </form>
                <hr class="my-3">
              <div class="text-center">
                <div class="form-group">
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
                      <input type="hidden" name="user_id" value="<?php echo $user['user_id']?>">
                        <input class="form-control" type="text" name="firstname" placeholder="<?php echo $user['firstname']?>" required>
                        <input class="form-control" type="text" name="middlename" placeholder="<?php echo $user['middlename']?>" required>
                        <input class="form-control" type="text" name="lastname" placeholder="<?php echo $user['lastname']?>" required>
                        <input type="text" class="form-control" name="email" placeholder="<?php echo $user['email']?>" required>
                        <input type="text" class="form-control" name="gender" placeholder="<?php echo $user['sex']?>" disabled>
                        <input type="text" class="form-control" name="course" placeholder="<?php echo $user['course_name']?>" disabled>
                        <input type="text" class="form-control" name="branch" placeholder="<?php echo $user['branch_name']?>" disabled>
                        <input type="datetime" class="form-control" name="batch" placeholder="<?php echo $user['batch']?>" disabled>
                    </div>
                    <button type="submit" name="update" class="buttoncen">Update</button>
                  </form>
                </div>
              </div>
              </div>
            </div>
        </div>
        </div>
    </div>
    


     <!-- Modal Check Status Concern-->
     <div class="modal fade" id="concernModal<?php echo $_SESSION['user']['username'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Check Status - Concern</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php 
                $name = $_SESSION['user']['firstname'];
                $query = "SELECT * FROM tbl_concerns WHERE name='$name'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
              ?>
              <h5>Submitted concern:</h5>
              <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="<?php echo $row['message'] ?>" readonly></textarea>
              <br>
              <h5>Message from the admin:</h5>
              <textarea name="" class="form-control" id="" cols="30" rows="5" disabled><?php echo $row['feedback'] ?></textarea>
              <?php }; ?>
            </div>
        </div>
        </div>
    </div>


      <!-- Modal Check Status Form-->
      <div class="modal fade" id="formModal<?php echo $_SESSION['user']['username'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Check Status - Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php 
                $s_id = $_SESSION['user']['student_id'];
                $query = "SELECT * FROM tbl_users WHERE student_id='$s_id'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                $status = $row['stat'];
              ?>
              <?php
              if ($status == 'NO FORM SUBMITTED'){
                echo " <h5>Status: <span style='color:orange;'> $status </span></h5>";
              }elseif ($status == 'PENDING'){
                echo " <h5>Status: <span style='color:yellow;'> $status </span></h5>";
              }elseif ($status == 'VERIFIED'){
                echo " <h5>Status: <span style='color:green;'> $status </span></h5>";
              }elseif ($status == 'NOT VERIFIED'){
                echo " <h5>Status: <span style='color:red;'> $status </span></h5>";
              }
             
               }; ?>
              <?php 
                $s_id = $_SESSION['user']['student_id'];
                $query = "SELECT * FROM tbl_forms WHERE student_no='$s_id'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
              ?>
              <h5>Submitted file: <span style="color: blue"><?php echo $row['resume'] ?></span></h5>
              <?php }; ?>
              <br>
              <h5>Message from the admin:</h5>
              <?php 
                $s_id = $_SESSION['user']['student_id'];
                $query = "SELECT * FROM tbl_users WHERE student_id='$s_id'";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
              ?>
              <textarea name="" class="form-control" id="" cols="30" rows="5" readonly><?php echo $row['feedback'] ?></textarea>
              <?php }; ?>
            </div>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>