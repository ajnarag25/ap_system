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
    <title>Apply for a Job</title>
</head>
<style>
  .white-bg{
    background-color: white;
    padding: 10px;
    border-radius: 10px;
  }
  #id2, #id3, #id4, #id5 {
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
		<span><center style="font-size: 69px; color:#C8FFFC; margin-top: 8rem;" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">"Get started <br>with your<br> trip to memory lane."</span></h1>
        <div class="content-header">
            </div>
</header>
    <div class="backdrop">

      <div class="text-center">
        <h2 data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true" id="form">Submit Form</h2>
      </div>
      <hr class="my-3">
        <div class="card-custom" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
          <div class="text-center">
            <img src="QCU_Logo_2019.png" width="70" height="70" alt="">
            <h2> ALUMNI PLACEMENT SYSTEM</h2>
            <br>
          </div>
          <?php 
              $user = $_SESSION['user']['username'];
              $s_id = $_SESSION['user']['student_id'];
              $query = "SELECT * FROM tbl_users WHERE username='$user' AND student_id='$s_id'";
              $result = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($result)) {
          ?>
          <form action="upload_file.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="">Last Name <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="lname" value="<?php echo $row['lastname'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">First Name <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="fname" value="<?php echo $row['firstname'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Middle Name <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="mname" value="<?php echo $row['middlename'] ?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="">Student Number <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="s_no" value="<?php echo $row['student_id'] ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                <label for="">Address <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="address" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Email Address <span style="color: red;">*</span></label>
                  <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Batch Graduated <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="batch"  value="<?php echo $row['batch'] ?>" required>
                </div>
                <div class="form-group col-md-4">
                <label for="">Gender <span style="color: red;">*</span></label>
                  <select name="gender" class="form-select" required>
                      <option selected value="<?php echo $row['sex'] ?>"><?php echo $row['sex'] ?></option>
                      <option>Male</option>
                      <option>Female</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                <label for="">Types of Careers <span style="color: red;">*</span></label>
            
                <select name="career" class="form-select" id="id1" onchange="myFunction()" required>
                <option selected disabled="true">Select Carreer</option>
                <?php 
                 $querys = "SELECT * FROM tbl_fields";
                 $results = mysqli_query($conn, $querys);
                 while ($row = mysqli_fetch_array($results)) {
                   
                ?>
                      <option value="<?php echo $row['field_name'] ?>">
                      <?php echo $row['field_name'] ?></option>
                     <?php }; ?>
                  </select>
             
                </div>
                <div class="form-group col-md-4">
                <label for="">Jobs <span style="color: red;">*</span></label>
        
                <?php if (isset($_GET['get_job'])) {
                        $job = $_GET['get_job'];
                        ?>
                      <select name="jobs" class="form-select" required>
                      <option selected value="<?php echo $job ?>"><?php echo $job ?></option>
                      <?php
                    } else{
                      ?>
                      <select name="jobs" class="form-select" required>
                      <option selected disabled="true">Select a job</option>
                        <?php 
                        $querys = "SELECT * FROM tbl_jobs";
                        $results = mysqli_query($conn, $querys);
                        while ($row = mysqli_fetch_array($results)) {
                   
                      ?>  
                      <option value="<?php echo $row['job_name'] ?>">
                      <?php echo $row['job_name'] ?></option>
                      <?php
                    }
                   ?>
                     <?php }; ?>
                  </select>
             
                </div>
                <div class="form-group col-md-4">
                <label for="">Upload Resume <span style="color: red;">*</span></label>
                  <input type="file" class="form-control" name="file" accept="application/pdf" required>
                </div>
                <div class="form-group col-md-6" id="id2">
                  <label for="">Select at least 3</label>
                  <br>
                  <div class="white-bg">
                    <div class="form-check ">
                      <div id="set1">
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c1" value="Computer Programmer" aria-label="...">
                        <label class="form-check-label">Computer Programmer</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c1" value="Information Security Analyst" aria-label="...">
                        <label class="form-check-label">Information Security Analyst</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c1" value="Web Developer" aria-label="...">
                        <label class="form-check-label">Web Developer</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c1" value="Database Administrator" aria-label="...">
                        <label class="form-check-label">Database Administrator</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6" id="id3">
                  <label for="">Select at least 3</label>
                  <br>
                  <div class="white-bg">
                    <div class="form-check ">
                      <div id="set2">
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c2" value="Teacher" aria-label="...">
                        <label class="form-check-label">Teacher</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c2" value="Education Administration" aria-label="...">
                        <label class="form-check-label">Education Administration</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c2" value="School Counseling" aria-label="...">
                        <label class="form-check-label">School Counseling</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c2" value="School Social Work" aria-label="...">
                        <label class="form-check-label">School Social Work</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6" id="id4">
                  <label for="">Select at least 3</label>
                  <br>
                  <div class="white-bg">
                    <div class="form-check ">
                      <div id="set3">
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c3" value="Civil Engineering1" aria-label="...">
                        <label class="form-check-label">Civil Engineering</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c3" value="Mechanical Engineering" aria-label="...">
                        <label class="form-check-label">Mechanical Engineering</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c3" value="Electrical Engineering" aria-label="...">
                        <label class="form-check-label">Electrical Engineering</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c3" value="Computer Engineering" aria-label="...">
                        <label class="form-check-label">Computer Engineering</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-6" id="id5">
                  <label for="">Select at least 3</label>
                  <br>
                  <div class="white-bg">
                    <div class="form-check ">
                      <div id="set4">
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c4" value="Public Accountant" aria-label="...">
                        <label class="form-check-label">Public Accountant</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c4" value="Tax Accountant" aria-label="...">
                        <label class="form-check-label">Tax Accountant</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c4" value="Manegerial Accountant" aria-label="...">
                        <label class="form-check-label">Manegerial Accountant</label>
                        <br>
                        <input class="form-check-input position-static" type="checkbox" name="f1[]" id="c4" value="Financial Planner" aria-label="...">
                        <label class="form-check-label">Financial Planner</label>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <br>
              <div class="text-center">
                <button type="submit" name="form_submit" class="btn btn-success">Submit</button>
              </div>
              <br>
            </div>
          </form>
        </div>
        <?php };?>
    </div>


	
	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      checkBoxLimit1()
      checkBoxLimit2()
      checkBoxLimit3()
      checkBoxLimit4()
      AOS.init({
        duration: 3000,
        once: true,
      });
      function myFunction() {
          var x = document.getElementById("id1").value;
          if (x == "Computer Science and Information Technology") document.getElementById("id2").style.display = "block", document.getElementById("id3").style.display = "none", document.getElementById("id4").style.display = "none", document.getElementById("id5").style.display = "none";
          else if (x == "Education") document.getElementById("id3").style.display = "block", document.getElementById("id2").style.display = "none", document.getElementById("id4").style.display = "none", document.getElementById("id5").style.display = "none" ;
          else if (x == "Engineering") document.getElementById("id4").style.display = "block", document.getElementById("id2").style.display = "none", document.getElementById("id3").style.display = "none", document.getElementById("id5").style.display = "none" ;
          else if (x == "Business and Accountancy") document.getElementById("id5").style.display = "block", document.getElementById("id2").style.display = "none", document.getElementById("id3").style.display = "none", document.getElementById("id4").style.display = "none" ;
      }
      function checkBoxLimit1() {
          var checkBoxGroup = document.getElementById('set1').getElementsByTagName("input");			
          var limit = 3;
          for (var i = 0; i < checkBoxGroup.length; i++) {
            checkBoxGroup[i].onclick = function() {
              var checkedcount = 0;
              for (var i = 0; i < checkBoxGroup.length; i++) {
                checkedcount += (checkBoxGroup[i].checked) ? 1 : 0;
              }
              if (checkedcount > limit) {
                console.log("You can select maximum of " + limit + " checkboxes.");
                alert("You can select maximum of " + limit + " checkboxes.");						
                this.checked = false;
              }
            }
          }
        }
        function checkBoxLimit2() {
          var checkBoxGroup = document.getElementById('set2').getElementsByTagName("input");			
          var limit = 3;
          for (var i = 0; i < checkBoxGroup.length; i++) {
            checkBoxGroup[i].onclick = function() {
              var checkedcount = 0;
              for (var i = 0; i < checkBoxGroup.length; i++) {
                checkedcount += (checkBoxGroup[i].checked) ? 1 : 0;
              }
              if (checkedcount > limit) {
                console.log("You can select maximum of " + limit + " checkboxes.");
                alert("You can select maximum of " + limit + " checkboxes.");						
                this.checked = false;
              }
            }
          }
        }
        function checkBoxLimit3() {
          var checkBoxGroup = document.getElementById('set3').getElementsByTagName("input");			
          var limit = 3;
          for (var i = 0; i < checkBoxGroup.length; i++) {
            checkBoxGroup[i].onclick = function() {
              var checkedcount = 0;
              for (var i = 0; i < checkBoxGroup.length; i++) {
                checkedcount += (checkBoxGroup[i].checked) ? 1 : 0;
              }
              if (checkedcount > limit) {
                console.log("You can select maximum of " + limit + " checkboxes.");
                alert("You can select maximum of " + limit + " checkboxes.");						
                this.checked = false;
              }
            }
          }
        }
        function checkBoxLimit4() {
          var checkBoxGroup = document.getElementById('set4').getElementsByTagName("input");			
          var limit = 3;
          for (var i = 0; i < checkBoxGroup.length; i++) {
            checkBoxGroup[i].onclick = function() {
              var checkedcount = 0;
              for (var i = 0; i < checkBoxGroup.length; i++) {
                checkedcount += (checkBoxGroup[i].checked) ? 1 : 0;
              }
              if (checkedcount > limit) {
                console.log("You can select maximum of " + limit + " checkboxes.");
                alert("You can select maximum of " + limit + " checkboxes.");						
                this.checked = false;
              }
            }
          }
        }

    </script>
</body>
</html>



