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
    <title>Job Opportunities</title>
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
		<span><center style="font-size: 69px; color:#C8FFFC; margin-top: 8rem;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>
        <div class="content-header">
            </div>
</header>
    <div class="backdrop">
        <h1><center style="font-size: 50px; color:#1E3B55;" class="backdrop h1" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Job Opportunities</center></h1>
    <div class="container">
        </div>
        	<div class="row">
        		<div class="col-md-9">
        			<?php
		$sql = "SELECT * FROM tbl_jobapplication";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);


		if ($queryResults > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='job-box card bg-light'>
				<div class='title-font' data-aos='zoom-in' data-aos-duration='1000' data-aos-once='true'>

				<h3>".$row['jobtitle']."</h3> 

				</div>

				<div class='text-font' data-aos='zoom-in' data-aos-duration='1000' data-aos-once='true'> 
				<p><center>	&nbsp</center></p>

				<p><center> ".$row['companyname']. " </center></p> 
				<p><center>	-------------------------------------------------------------</center></p>
				<p><center> ".$row['details']. "</center></p> 
				<p><center> ".$row['employer']."</center></p>
				</div>
				</div>";
			}
		}
		?>
        		</div>
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



