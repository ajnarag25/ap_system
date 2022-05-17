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
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
  .row{
    align-items: center;
  }
  .card{
    padding: 30px;
    background-color: rgb(214,214,214);
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
  <span><center style="font-size: 69px; color:#C8FFFC; margin-top: 8rem;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Available Job is Here!" <br> <a class="btn btn-success" href="#jobs">View Available Jobs</a></span></h1>
        <div class="content-header">
    </div>
</header>
  <div id="jobs">
  <?php 
      $query = "SELECT * FROM tbl_jobs";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
      echo '
      <div class="text-center links card">
        <div class="row">
            <div class="col-md-6">
              <img src="'.$row['image'].'" width="250px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
            </div>
            <div class="col-md-4">
              <h4 class="text-center" style="color:black" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">'.$row['job_name'].'</h4>
              <a class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#jobModal'.$row['id'].'">Read More</a>
            </div>
        </div>
      </div>' ?>
   
     <!-- Modal1-->
     <div class="modal fade" id="jobModal<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['job_name']?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <img src="<?php echo $row['image']?>" width="180px">
                <br><br>
                <h4>JOIN US AND ENJOY THESE BENEFITS:</h4>
                <br>
                <textarea class="form-control" cols="30" rows="15" readonly><?php echo $row['job_desc']?></textarea>
              </div>
            </div>
            <div class="text-center">
                <a class="btn btn-success" type="submit" style="color:white" href="apply.php?get_job=<?php echo $row["job_name"] ?>#form">Interested? <br> Register Here!</a>
            <br><br>
            </div>
        </div>
        </div>
    </div>
  </div>
  <?php }; ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
 
</header>
</body>
</html>
