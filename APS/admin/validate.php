<?php
session_start();
include_once('connection.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER ["REQUEST_METHOD"]== "POST") {

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
     $sql="select * from tbl_users where username='".$username."'";
     $result= mysqli_query($conn, $sql);
     if (mysqli_num_rows($result)>0){
            $user=mysqli_fetch_object($result);
            if(password_verify($password, $user->password)){
               if($user->type=='admin'){
                $_SESSION['user']=$user;
                header('Location: main.php');
               }

            }else{
                echo "<script type=\"text/javascript\">
                alert(\"Woops! The username or password you entered is wrong.\");
                window.location = \"index.php\"
                </script>";
            }
     }else{
        echo "<script type=\"text/javascript\">
        alert(\"User not found!\");
        window.location = \"index.php\"
        </script>";
     }

}

?>
