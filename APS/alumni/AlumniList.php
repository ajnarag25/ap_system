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
    <link rel="stylesheet" href="webview.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="AlumniList.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <title>QCU Alumni Portal</title>
</head>
<body>
	<div class="banner">
		<div class="navbar">
		<img src="logo.png" class="logo">
		<ul>
			<li><a href="#">Home</a></li>
            <li><a href="alumni.php">Alumni</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="forums.php">Forum</a></li>
			<li><a href="#">Job Opportunities</a></li>
			<li><a href="#">Profile</a></li>
		</ul>
	</div>
  <center><h1 style="color:white;"> ALUMNI LIST </h1></center>
<div class="wrapper">
    <input type="text" class="input" 
    placeholder="Lastname, Firstname, Middlename">
    <div class="searchbtn"><i class="fas fa-search"></i></div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="column">
    <div class="card">
        <div class="container">
        <center>
      <img src="emman.jpg" alt="emman" style="width:25%">
        
        <h2>Emmanuel Joseph M. Malbas</h2>
        <p class="title">Email: emmanue.malbas23@gmail.com</p>
        <p></p>
        <p>Course: Bachelor of Science in Information Technology</p>
        <p>Batch: 2020</p>
        <p>Job: Web Designer</p>
        <p><button class="button">View</button></p>
        <br>
        </center>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
        <div class="container">
        <center>
      <img src="orilla.jpg" alt="orilla" style="width:25%">
        <h2>Joshua Aldeger Orilla</h2>
        <p class="title">Email: joshuaorilla1@gmail.com</p>
        <p></p>
        <p>Course: Bachelor of Science in Information Technology</p>
        <p>Batch: 2020</p>
        <p>Job: Web Developer</p>
        <p><button class="button">View</button></p>
        <br>
        </center>
      </div>
    </div>
  </div>
	</body>
</html>