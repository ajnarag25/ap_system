<?php 
include 'config.php';
session_start();
 
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'helpers/libraries.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Contact</title>
</head>
<style>
    .space{
        margin-left: 10px;
    }
    .logo-bg{
        color: black;
    }
  .custom-container{
    width: 83%;
    margin: auto;
    padding: 35px 0;
    background-color: rgb(216,216,216);
    padding: 40px;
    border-radius: 20px;
    color: black;
  }
  header{
	width: 100%;
	min-height: 50vh;
	background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url(website.jpg);
	background-size: cover;
	background-position: center;
	height: 1250px;
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
<body>
	<header>
	<div class="header">
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

  <div class="custom-container" style="margin-top:3rem;">
    <div class="text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
    <h2>Contact us</h2>
    <h4>Don't be afraid to reach out. You + us = awesome.</h4>
    </div>
    <hr class="my-3">
    <br>
    <div class="row" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
        <div class="col-sm-4" >
        <h4>Contact:</h4>
        <br>
            <i class='bx bxs-navigation bx-sm' style="display: flex;" > <h6 class="space">Room IA206e, 2nd Floor TechVoc Building  <br> San Bartolome, Novaliches, 1116</h6></i>
            <br>
            <i class='bx bxs-envelope bx-sm' style="display: flex;"> <h6 class="space">placement.alumni.relation@qcu.edu.ph</h6></i>
            <br>
            <i class='bx bxs-phone bx-sm' style="display: flex;"> <h6 class="space">+639196515686</h6></i>
        <br>
        <h4>Opening Hours:</h4>
        <br>
        <i class='bx bx-radio-circle-marked bx-sm' style="display: flex;"> <h6 class="space">Monday: 9:00AM - 10:00PM</h6></i>
        <i class='bx bx-radio-circle-marked bx-sm' style="display: flex;"> <h6 class="space">Tuesday: 9:00AM - 10:00PM</h6></i>
        <i class='bx bx-radio-circle-marked bx-sm' style="display: flex;"> <h6 class="space">Wednesday: 9:00AM - 10:00PM</h6></i>
        <i class='bx bx-radio-circle-marked bx-sm' style="display: flex;"> <h6 class="space">Thursday: 9:00AM - 10:00PM</h6></i>
        <i class='bx bx-radio-circle-marked bx-sm' style="display: flex;"> <h6 class="space">Friday: 9:00AM - 10:00PM</h6></i>
        </div>
        <div class="col-sm-8">
            <div class="text-center">
                <h4>Map Visualization:</h4>
                <br>
                <a href="https://www.google.com/maps/search/qcu+san+Bartolome/@14.679485,121.0131676,14z/data=!3m1!4b1"><img src="images/map.png" width="700" alt=""></a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="text-center" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
    <h4 class="text-center">Send Message:</h4>
        <?php 
              $user = $_SESSION['user']['username'];
              $s_id = $_SESSION['user']['student_id'];
              $query = "SELECT * FROM tbl_users WHERE username='$user' AND student_id='$s_id'";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) {
          ?>
            <form action="contact_submit.php" method="POST">
                <br><br>
              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="txtName" class="form-control" placeholder="Name" value="<?php echo $row['firstname'] ?>" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtEmail" class="form-control" placeholder="Email" value="<?php echo $row['email'] ?>" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Phone Number" value="" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Message" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <br>
                    </div>
                    <div class="text-center">
                        <div class="form-group mx-auto ">
                            <button class="custom-button-contact" name="send_msg">SEND MESSAGE</button>
                        </div>
                    </div>
                
                </div>
          </form>
          <?php };?>
    </div>
  </div>


</header>


	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });

    </script>
</body>
</html>



