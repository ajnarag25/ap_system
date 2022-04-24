<?php 
include 'config.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
$sql = 'SELECT * FROM tbl_events ORDER BY schedule DESC';
$result = mysqli_query($conn, $sql);
$events = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'helpers/libraries.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Events</title>
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
                    <div class="content-header">

                    </div>
                    <span><center style="font-size: 69px; margin-top: 8rem; color:#C8FFFC;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>

                    </header>
                    <div class="backdrop">
                        <h1><center style="font-size: 50px; color:#1E3B55;" class="backdrop h1" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Upcoming Events</center></h1>

                        <main>
                          <div class="container-fluid">
                            <div class="row">
                                <?php 
                                foreach ($events as $event) {
                                  echo'
                                  <div class="article col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                                  <div class="card m-1 px-2 py-4">
                                  <h2><center style=" color: #1E3B55;" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">'.$event['title'].'</center></h2>
                                  <h3><center>'.$event['banner'].'</center></h3>
                                  <p>'.$event['content'].'</p>
                                  <center>
                                  <a href="event.php?id='.$event['id'].'"><button type="button" class="button">See More</button></a>
                                  </center>
                                  </div>
                                  </div>
                                  ';
                              }
                              ?>
                          </div>
                      </div>
                  </main>
                  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                  <script>
                      AOS.init({
                        duration: 3000,
                        once: true,
                    });
                </script>
            </body>
            </html>