<?php 
include_once 'config.php';
include_once 'get_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webdesign.css">
    <link rel="stylesheet" href="transitions.css">
    <title>QCU Alumni Portal</title>
</head>
<style>
	.logo-text{
		display: flex;
		align-items: center;
		color: white;
	}
	.logo-text h2{
		margin-left: 20px;
	}
</style>
<body>
	<div class="banner">
		<div class="navbar">
			<div class="logo-text">
				<img src="QCU_Logo_2019.png" width="70" height="70" alt="">
				<h2> ALUMNI PLACEMENT PORTAL</h2>
			</div>

        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="joboppurtunities.php">Job Opportunities</a>
            <li><a href="profile.php"><?php echo $_SESSION['user']['username'];?></a></li>
		</ul>
	</div>
	<div class="content">
    	<?php echo "<h1>Welcome, " . $_SESSION['user']['username'] . "!</h1>"; ?>
    	<p>"Get started with your trip to memory lane."</p>
	<div>
		<a href="logout.php"><button type="button">Logout</button>
	</div>
</body>
</html>