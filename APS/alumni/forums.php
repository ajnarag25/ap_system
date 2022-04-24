<?php 
include 'config.php';
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
$sql = 'SELECT * FROM tbl_forum_topics ORDER BY date_created DESC';
$result = mysqli_query($conn, $sql);
$forums = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'helpers/libraries.php';
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Forums</title>
<style>
.addforum {
    margin-top: 50px;
    margin-left: 2px;
    width: 100%;
    display: flex;
    justify-content: center;
    transform: translateY(-50%);
    text-align: center;
    align-content: center;

}

.addforum button{
    background: #5D402A;

}

.addforum button:hover{
    transform: translateY(-5px);
    background: #3e2b1c;
}

</style>
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
                        <li><a href="profile.php">Profile</a>
                        </ul>
                    </div>
                    <span><center style="font-size: 69px; margin-top: 8rem; color:#C8FFFC;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>
                        <div class="content-header">

                        </div>
                    </header>
                    <div class="backdrop">
                        <h1><center style="font-size: 50px; color:#1E3B55;" class="backdrop h1" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">FORUMS</center></h1>

                        <div class="addforum">
                          <a href="addforum.php"><button type="addforum" class="addforum">  Add Forum  </button></a>
                          </div>

                        <main>
                            <div class="container-fluid">
                                <div class="row">
                                  <?php 
                                  foreach ($forums as $forum) {
                                      echo'
                                      <div class="article col-md-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                                      <div class="card m-1 px-2 py-4">
                                      <h2><center style=" color: #1E3B55;" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">'.$forum['title'].'</center></h2>
                                      <p>'.$forum['description'].'</p>
                                      <center>
                                      <a href="forum.php?id='.$forum['id'].'"><button type="button" class="button">See More</button></a>
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
                </main>

            </body>
            </html>