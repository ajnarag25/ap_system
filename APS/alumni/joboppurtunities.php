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
  .white-bg{
    background-color: white;
    padding: 10px;
    border-radius: 10px;
  }
  #id2, #id3 {
    display:none;
  }
  .card-custom{
    padding: 20px;
    border-radius:30px; 
    padding-left: 100px;
    padding-right: 100px;
    background: #adad99;
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

      <div class="text-center">
        <h2 data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">Submit Form</h2>
      </div>
      <hr class="my-3">
        <div class="card-custom">
          <div class="text-center">
            <img src="QCU_Logo_2019.png" width="70" height="70" alt="">
            <h2> ALUMNI PLACEMENT SYSTEM</h2>
            <br>
          </div>
          <form action="">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">Last Name *</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">First Name *</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Middle Name *</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                <label for="">Student Number *</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                <label for="">Address *</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Email Address *</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                <label for="">Batch Graduated *</label>
                  <input type="date" class="form-control" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Gender *</label>
                  <select name="strand" id="b6" class="form-control" required>
                      <option selected disabled="true">Select gender</option>
                      <option>Male</option>
                      <option>Female</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                <label for="">Types of Careers *</label>
                <select name="strand" class="form-control" id="id1" onchange="myFunction()" required>
                      <option selected disabled="true">Select Carreer</option>
                      <option value="1">Computer Science and Information Techonology</option>
                      <option value="2">Education</option>
                      <option value="3">Engineering</option>
                      <option value="4">Business and Accountancy</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                <label for="">Upload Resume *</label>
                  <input type="file" class="form-control">
                </div>
                <div class="form-group col-md-6" id="id2">
                  <label for="">Select at least 3</label>
                  <br>
                  <div class="white-bg">
                    <div class="form-check ">
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                      <label class="form-check-label">Computer Programmer</label>
                      <br>
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                      <label class="form-check-label">Information Security Analyst</label>
                      <br>
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option3" aria-label="...">
                      <label class="form-check-label">Web Developer</label>
                      <br>
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option4" aria-label="...">
                      <label class="form-check-label">Database Administrator</label>
                      <br>
                      <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option5" aria-label="...">
                      <label class="form-check-label">Others</label>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="text-center">
                <button type="submit required" class="btn btn-success">Submit</button>
              </div>
              <br>
            </div>
          </form>
        </div>
    </div>


	
	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
      function myFunction() {
          var x = document.getElementById("id1").value;
          if (x == "1") document.getElementById("id2").style.display = "block";
      }
    </script>
</body>
</html>



