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
    <title>Home</title>
</head>
<body>
<header>
	<div class="header">
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
		<span><center style="font-size: 69px; margin-top: 8rem; color:#C8FFFC;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span>
        <div class="content-header">
    </div>
</header>
	<div class="backdrop nomt">
        <h1><center style="font-size: 50px; color:#1E3B55;" class="nomt" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">About Us</center></h1>
        <center style="font-size: 20px; color:#1E3B55;" class="nomt" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
        <h2>Contact Info: +639064113098</h2>  <h2>Email: emmanuel.malbas20@gmail.com</h2>
         </center>
	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</body>
</html>
