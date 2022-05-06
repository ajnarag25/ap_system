<?php 

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="card-profile.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>About</title>
</head>
<style>
  .custom-container{
    width: 83%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  header{
	width: 100%;
	min-height: 50vh;
	background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url(website.jpg);
	background-size: cover;
	background-position: center;
	align-items: center;
	height: 1100px;
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
  .links p{
    color: white;
  }
  .jumb-custom{
      background-color: rgb(216,216,216);
      padding: 40px;
      border-radius: 20px;
      text-align: center;
      color: black;
  }
</style>
<body>
<header>
    <div class="navbar">
      <div class="logo-text">
        <img src="QCU_Logo_2019.png" width="70" height="70" alt="">
        <h2>ALUMNI PLACEMENT SYSTEM</h2>
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
        <div class="jumbotron jumb-custom">
            <h2 class="display-8" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Placement Services</h2>
            <hr class="my-3">
            <p class="lead">a. Creates oppurtunities for career development enhancements and assists in the job seeking of students and graduates;</p>
            <p class="lead">b. Implements the University placement program for graduates and undergraduates to respond to the manpower needs of local private enterprises and government agencies;</p>
            <p class="lead">c. Liaises and maintains good relationships with establishments for possible job and career development opportunities especially to students; </p>
            <p class="lead">d. Adopts a reliable and up-to-date directory and information system on work/placement and career advancement opportunities for graduates and students of the University.</p>
            <hr class="my-3">
            <h2 class="display-8" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Alumni Placement Staffs</h2>
            <br>
            <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="images/profile.png">
                </div>
                <div class="team-content">
                  <h3 class="name">Manny Villar</h3>
                  <h4 class="title">Position</h4>
                </div>
                <ul class="social">
                  <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                </ul>
              </div>
            </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="images/profile.png">
                </div>
                <div class="team-content">
                  <h3 class="name">Manny Villar</h3>
                  <h4 class="title">Position</h4>
                </div>
                <ul class="social">
                  <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                </ul>
              </div>
            </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="images/profile.png">
                </div>
                <div class="team-content">
                  <h3 class="name">Manny Villar</h3>
                  <h4 class="title">Position</h4>
                </div>
                <ul class="social">
                  <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                </ul>
              </div>
            </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="images/profile.png">
                </div>
                <div class="team-content">
                  <h3 class="name">Manny Villar</h3>
                  <h4 class="title">Position</h4>
                </div>
                <ul class="social">
                  <li><a href="" class="fa fa-facebook" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-twitter" aria-hidden="true"></a></li>
                  <li><a href="" class="fa fa-google-plus" aria-hidden="true"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
  
    <script src="https://use.fontawesome.com/445d09784c.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
 
</header>
</body>
</html>
