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
        width: 83%;
        margin: auto;
        padding: 35px ;
        display: flex;
        align-items: center;
        justify-content: space-between;
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
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
          </ul>
        </ul>
  </div>
  <div class="card-body overflow-auto custom-container" style="background-color: white" >
      <table class="table table-hover ">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Avatar</th>
            <th scope="col">Student No.</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <tr>
            <th><?php echo $row['user_id']; ?></th>
            <td><img src="../alumni/<?php echo $row['avatar_path']; ?>" width="50" alt=""></td>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['firstname']. ' '. $row['middlename'].' '.$row['lastname']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $setverify ; ?></td>
            <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verifyModal<?php echo $row['user_id'] ?>"> <i class="mdi mdi-check"></i></button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['user_id'] ?>"> <i class="mdi mdi-pencil"></i></button>
                <button type="button" class="btn btn-danger" style="color:white" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $row['user_id'] ?>"> <i class="mdi mdi-delete"></i></button>
            </td>
            </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>