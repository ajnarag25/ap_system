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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
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
</style>
<body>
<header>
	<div class="navbar">
      <div class="logo-text">
        <img src="QCU_Logo_2019.png" width="70" height="70" alt="">
        <h2> ALUMNI PLACEMENT SYSTEM</h2>
      </div>
        <ul class="uls">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="joboppurtunities.php">Job Opportunities</a>
            <li><a href="profile.php"><?php echo $_SESSION['user']['username'];?></a>
            <div class="sub-menu">
              <ul>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
          </ul>
        </ul>
  </div>

    <br><br><br>

    <div class="text-center links">
      <div class="row">
        <div class="col-sm-4">
          <img src="images/1.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
          <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Register now to join our <br> Virtual Career Fair on March <br> 1 at 1:00 PM.</p>
          <a href="https://qcu.edu.ph/virtual-career-fair/" class="btn btn-success">Read More</a>
        </div>
        <div class="col-sm-4">
          <img src="images/2.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
          <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">SUN LIFE is looking for a <br> Financial Adviser </p>
          <a href="https://qcu.edu.ph/sun-life-is-looking-for-a-financial.../" class="btn btn-success">Read More </a>
        </div>
        <div class="col-sm-4">
          <img src="images/3.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
            <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">FAArt Creative Design Studio is <br> Looking for an Account Executive <br> and a Graphic Artist!</p>
            <a href="https://qcu.edu.ph/faart-studio-is-looking-for-applicants/" class="btn btn-success">Read More</a>
        </div>
      </div>
    </div>
   
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
