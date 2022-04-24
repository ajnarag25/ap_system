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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="alumniJob.css">
    <link rel="stylesheet" href="transitions.css">
    <title>Add Forum</title>
</head>
<body>
    <header>
    <div class="header">
        <div class="navbar">
        <img src="logo.png" class="logo">
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
        <div class="content-header">
    </div>
    <span><center style="font-size: 69px; color:#C8FFFC; margin-top: 8rem;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>
        <div class="content-header">
            </div>
</header>
    <div class="backdrop">
        <h1><center style="color:#1E3B55;">Add A Forum Topic</center></h1>
    <div style="margin-left: 50px">
            <div class="nameless">
    <h1 style="margin-left: 50px;">POST A FORUM TOPIC HERE</h1>

</div>
<form method="POST" action="forumsearch.php" class="applicationform" style="margin-left: 60px; margin-top: 50px;">
    <div class="input-group">

        <label>Forum Title:</label>
        <input type="text" name="forumtitle" placeholder="Enter your title here.." required>
    </div>
    <div class="input-group">
        <label style="text-align: center; vertical-align: middle;">Forum Details:</label>
        <textarea type="text" name="description" placeholder="Enter the forum details here.." style="width: 90%; height: 100px;" required></textarea>
    </div>
    <div class="input-group">
    <label></label>
    <div style="display: flex; width: 100%; flex-grow: 1; align-items: center; margin-left: 4rem;">
      <button type="submit" name="submit" class="btn">Submit A Job </button></div>
  </div>
    </div>
    
</form>
    </div>
    </div>

</body>
</html>

   
                                         