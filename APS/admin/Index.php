<!DOCTYPE html>
<html lang="en>

<head>
    <meta charset="UTF-8">
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Login.css">
    <title>Login Page</title>
</head>

<body>
    
    <div class="container">
    <form action="validate.php" method="post">
        <div class="Login-box">
            <img src="images.jpg" alt="" width="80px" height="72px" id="images"></img>
          <h1>Admin Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
             <input type="text" placeholder="Adminname"
                       name="username" value="">
             </div>

             <div class="textbox">
                 <i class="fa fa-lock" aria-hidden="true"></i>
                 <input type="password" placeholder="Password"
                        name="password" value="">
            </div>

            <input class="button" type="submit"
                   name="login" value="Sign In">
        </div>
    </form>
</body>
</html>
