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
                header('Location: http://localhost/alumni/admin/adminpage.php');
               }

            }else{
                echo 'wrong password';
            }
     }else{
        echo 'user not found';
        print_r($result);
     }
    // $stmt = $conn->prepare("SELECT * FROM adminlogin");
    // $stmt->execute();
    // $users = $stmt->fetchAll();

    // foreach($users as $user) {

    //     if(($user['adminname'] == $adminname) &&
    //          ($user['password'] == $password)){
    //              header("Location: adminpage.php");
    //          }
    //          else{
    //              echo "<script language='javascript'>";
    //              echo "alert('WRONG INFORMATION')";
    //              echo "</script>";
    //              die();
    //          }
    // }
}

?>