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
<body>
	<div class="banner">
		<div class="navbar">
		<img src="logo.png" class="logo">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="forums.php">Forum</a></li>
            <li><a href="joboppurtunities.php">Job Opportunities</a>
            <li><a href="profile.php"><?php echo $_SESSION['user']['username'];?></a></li>

	</div>
	<div class="content">
    	<?php echo "<h1>Welcome, " . $_SESSION['user']['username'] . "!</h1>"; ?>
    	<p>"Get started with your trip to memory lane."</p>
	<div>
		<a href="logout.php"><button type="button">Logout</button>
	</div>
</body>
</html>