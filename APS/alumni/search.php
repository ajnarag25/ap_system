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
    <title>Search A Job</title>
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
            <li><a href="joboppurtunities.php">Search A Job</a>
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
        <span><center style="font-size: 69px; color:#C8FFFC; margin-top: 8rem;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>
        <div class="content-header">
            </div>
</header>
    <div class="backdrop">
        <h1><center style="font-size: 50px; color:#1E3B55;" class="backdrop h1" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Search A Job</center></h1>
    <div class="container">
        </div>
            <div class="row">
                <div class="col-md-9">
<?php
if (isset($_POST['search'])) {

    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM tbl_jobapplication WHERE jobtitle LIKE '%$search%' OR employer LIKE '%$search%' OR companyname LIKE '%$search%' OR details LIKE '%$search%' ";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='job-box card bg-light'>
                <div class='title-font' data-aos='zoom-in' data-aos-duration='1000' data-aos-once='true'>
                <h3>".$row['jobtitle']."</h3> 

                </div>

                <div class='text-font' data-aos='zoom-in' data-aos-duration='1000' data-aos-once='true'>  
                <p><center> &nbsp</center></p>

                <p><center> ".$row['companyname']. " </center></p> 
                <p><center> -------------------------------------------------------------</center></p>
                <p><center> ".$row['details']. "</center></p> 
                <p><center> ".$row['employer']."</center></p>
                </div>
                </div>";
        }
    } else {

        echo "<div class='searchresult'> There are no results matching your search! </div>";

    }
}


?></div>
                <div class="col-md-3">
    <div class="postajob" data-aos="flip-up" data-aos-duration="1000" data-aos-once="true">
    <a href="jobapplication.php" ><button type="button" >Post a Job Offer</button> </a>

        </div>
                <form action="search.php" method="POST">
        <div class="alignsearch" data-aos="flip-up" data-aos-duration="1000" data-aos-once="true" ><input id= "submit" type="text" name="search" placeholder="Input Search"></div>

        <div class="alignments" data-aos="flip-up" data-aos-duration="1000" data-aos-once="true">
            <button type="submit">Search</button>
    </div>
</form>
                </div>
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
</body>
</html>



