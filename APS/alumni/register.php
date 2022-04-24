<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $batch = $_POST['batch'];
  $course_id = $_POST['course_id'];
  $branch_id = $_POST['branch_id'];

  if ($password == $cpassword) {
    $sql = "SELECT * FROM tbl_users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO tbl_users (username, password, email, fullname, gender, batch, course_id, branch_id)
          VALUES ('$username', '".password_hash($_POST['password'], PASSWORD_DEFAULT)."', '$email', '$fullname', '$gender','$batch', '$course_id', '$branch_id')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('User Registration Completed.')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        $fullname ="";
        $gender = "";
        $batch = "";
        $course_id = "";
        $branch_id = "";
      } else {
        echo "<script>alert('Something went wrong.')</script>";
      }
    } else {
      echo "<script>alert('Email already exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password doesn't match.')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="transitions.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="yearpicker.js"></script>
  <title>Register</title>
  
</head>
<body>
  <div class="container">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registration</p>
    <div class="content">
      <form action="#" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fullname" value="<?php echo $fullname; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" value="<?php echo $username; ?>" required>
          </div>
		            <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" placeholder="Enter your e-mail" name="email" value="<?php echo $email; ?>" required>
          </div>
		    <div class="input-box">
            <span class="details">Student Number</span>
            <input type="number_format" placeholder="Enter your student number" name="student_number" value="<?php echo $student_number; ?>" required>
          </div>
         
		  <div class="input-box">
            <span class="details">Batch Graduated</span>
            <input type="text" class="yearpicker" placeholder="Enter your batch year" name="batch" value="<?php echo $batch; ?>" required>
          </div>
        <div class="input-box">
            <span class="details">Course Graduated</span>
            <select name="course_id" class="select" value="<?php echo $course_id; ?>" required>
              <option disabled selected>Select Your Previous Course</option>
              <?php 
                $course_query = "SELECT * FROM tbl_courses";
                $course_result = mysqli_query($conn, $course_query);
                if(mysqli_num_rows($course_result) > 0)
                {
                  while($course_row = mysqli_fetch_assoc($course_result))
                  {
                    ?>
                    <option value="<?php echo $course_row['course_id'] ?>">
                      <?php echo $course_row['course_name'] ?></option>
                      <?php
                  }
                }
              ?>
            </select>
      </div>
      <div class="input-box">
            <span class="details">Branch</span>
            <select name="branch_id" class="select" value="<?php echo $branch_id; ?>" required>
              <option disabled selected>Select Your Alma Mater Branch</option>
              <?php 
                $branch_query = "SELECT * FROM tbl_branch";
                $branch_result = mysqli_query($conn, $branch_query);
                if(mysqli_num_rows($branch_result) > 0)
                {
                  while($branch_row = mysqli_fetch_assoc($branch_result))
                  {
                    ?>
                    <option value="<?php echo $branch_row['branch_id'] ?>">
                      <?php echo $branch_row['branch_name'] ?></option>
                      <?php
                  }
                }
              ?>
            </select>
          </div>
    </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="one" value="Male">
          <input type="radio" name="gender" id="two" value="Female">
          <input type="radio" name="gender" id="three" value="Others">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="one">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
            <label for="two">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="three">
            <span class="dot three"></span>
            <span class="gender">Others</span>
            </label>
          </div>
        <div class="button">
         <center> <button name="submit" class="btn">Register</button></center>
        </div>
      </form>
    </div>
  </div>
    <p class="register-text">Already have an account? <a href="index.php">Login Here</a>.</p>
    </form>
  </div>
<script src="yearpicker.js"></script>
<script>
  $(document).ready(function() {
    $(".yearpicker").yearpicker({
      
      startYear: 1994,
      endYear: 2022,
    });
  });
</script>
</body>
</html>