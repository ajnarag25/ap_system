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
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
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

    <br><br><br>

    <div class="text-center links">
      <div class="row">
        <div class="col-sm-4">
          <img src="images/1.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
          <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">Register now to join our <br> Virtual Career Fair on March <br> 1 at 1:00 PM.</p>
          <a class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#aps1Modal">Read More</a>
        </div>
        <div class="col-sm-4">
          <img src="images/2.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
          <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">SUN LIFE is looking for a <br> Financial Adviser </p>
          <a class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#aps2Modal">Read More </a>
        </div>
        <div class="col-sm-4">
          <img src="images/3.jpg" width="280px" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
          <br><br>
            <p data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">FAArt Creative Design Studio is <br> Looking for an Account Executive <br> and a Graphic Artist!</p>
            <a class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#aps3Modal">Read More</a>
        </div>
      </div>
    </div>
   
     <!-- Modal1-->
     <div class="modal fade" id="aps1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">VIRTUAL CAREER FAIR <br> February 11, 2022</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="text-center">
              <img src="images/1.jpg" width="180px">
              <br><br>
              <h4>JOIN US AND ENJOY THESE BENEFITS:</h4>
              <ul>
                <li>QCU Placement will assist you in preparing for your job search and connect with employers virtually.</li>
                <br>
                <li>In celebration of University Week, we are excited to partner with JOBS180.com to run career fairs in a virtual format on Monday, March 1, 2022</li>
              </ul>
              </div>
            </div>
            <div class="text-center">
              <form action="apply.php#form">
                <button type="submit" class="btn btn-success">Interested? <br> Register Here!</button>
              </form>
            <br><br>
            </div>
        </div>
        </div>
    </div>


     <!-- Modal2-->
     <div class="modal fade" id="aps2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SUN LIFE Is Looking For A Financial Advisor <br> February 4, 2022 </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="text-center">
              <img src="images/2.jpg" width="180px">
              </div>
              <br><br>
              <h4 class="text-center">JOIN US AND ENJOY THESE BENEFITS:</h4>
              <br>
              <ul>
                <li>High Income</li>
                <li>Monthly Cash Bonus</li>
                <li>Quarterly Incentives (Limited Edition and Luxury Items, Buffets, Staycations)</li>
                <li>All-Expense Paid Luxury Travel Incentives (Local and International)</li>
                <li>National and International Recognition of Your Achievements</li>
                <li>Lots of Free Personal Skills and Enhancement Trainings</li>
                <li>Fun and Helpful Teammates</li>
              </ul>
              <br>
                <div class="text-center">
                  <h4>INTERESTED?</h4>
                  <br>
                  <p>Please send your resume to Rolando.o.tanglao@sunlife.com.ph</p>
                  <p>Look For: Mr. Rolando O. Tanglao</p>
                  <p>Contact Number: 09176541319</p>
                </div>
              </div>
            <div class="text-center">
              <form action="apply.php#form">
                <button type="submit" class="btn btn-success">Interested? <br> Register Here!</button>
              </form>
            <br><br>
            </div>
        </div>
        </div>
    </div>



    <!-- Modal3-->
    <div class="modal fade" id="aps3Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FAArt Creative Design Studio Is Looking For An Account Executive And A Graphic Artist! <br> February 4, 2022</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
            <img src="images/3.jpg" width="180px">
            </div>
            <br><br>
            <h4 class="text-center">JOB QUALIFICATIONS:</h4>
            <br>
            <ol>
              <li>Open to Fresh grads, Senior High grad, and experienced Account Executive</li>
              <li>Must be knowledgeable with Microsoft Office & Google apps (Google Sheet, Google Docs, etc.)</li>
              <li>Must at least be proficient in English and Filipino</li>
              <li>Must be willing to learn /be trained and work in a team</li>
              <li>Must have a heart of service. Towards clients and teammates</li>
              <li>Must be available to start ASAP</li>
              <li>Must be willing to work ONSITE (Office is located in Q.C.)</li>
              <li>Open to working long hours or Weekends/holidays (if needed)</li>
            </ol>
            <br>
            <div class="text-center">
              <h4>RESPONSIBILTY:</h4>
              <p>Manage clients’ requests for advertising materials</p>
            </div>

            <br>
            <h4 class="text-center">JOB PERKS:</h4>
            <br>
            <ol>
              <li>Complimentary Lunch Meals</li>
              <li>Point-to-point shared shuttle service</li>
              <li>Medical, Dental and Optical Allowance</li>
              <li>Competitive Profit Sharing Bonuses</li>
            </ol>
            </div>
          <div class="text-center">
            <form action="apply.php#form">
              <button type="submit" class="btn btn-success">Interested? <br> Register Here!</button>
            </form>
          <br><br>
          </div>
      </div>
      </div>
  </div>
  
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
