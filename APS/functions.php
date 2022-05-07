<?php 

include 'config.php';

session_start();

if (isset($_SESSION['user'])) {
    header("Location: alumni/welcome.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
    $usertype = $_POST['user_type'];

	$sql = "SELECT * FROM tbl_users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if ($usertype == ''){
        echo "<script defer>alert('Please select a user type!'); 
        window.location = \"index.php\"
        </script>";
    }
    elseif ($usertype == 'alumni'){
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                if($row['type'] == 'alumni'){
                    $_SESSION['user'] = $row;
                    header("Location: alumni/welcome.php");
                }else{
                    echo "<script defer>alert('Account is in another type of user!'); 
                    window.location = \"index.php\"
                    </script>";
                }
            }else{
                echo "<script defer>alert('Woops! Your Password is Incorrect.'); 
                window.location = \"index.php\"
                </script>";
            }
        
        } else {
            echo "<script defer>alert('Woops! The username or password you entered is wrong.'); 
            window.location = \"index.php\"
            </script>";
        }
    }elseif ($usertype == 'admin'){
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                if($row['type'] == 'admin'){
                    $_SESSION['user'] = $row;
                    header("Location: admin/main.php");
                }else{
                    echo "<script defer>alert('Account is in another type of user!'); 
                    window.location = \"index.php\"
                    </script>";
                }
            }else{
                echo "<script defer>alert('Woops! Your Password is Incorrect.'); 
                window.location = \"index.php\"
                </script>";
            }
        
        } else {
            echo "<script defer>alert('Woops! The username or password you entered is wrong.'); 
            window.location = \"index.php\"
            </script>";
        }
    }
}

if (isset($_POST['reset'])) {
    $student_no = $_POST['studentno'];
    $emails = $_POST['email'];
    $setOTP = rand(0000,9999);

	$sql = "SELECT * FROM tbl_users WHERE student_id='$student_no' AND email='$emails'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);
    
    if ($check == 0){
        echo "<script defer>alert('Sorry we could not find your account.'); 
        window.location = \"index.php\"
        </script>";
    }else{
        $conn->query("UPDATE tbl_users SET otp='$setOTP' WHERE student_id='$student_no'") or die($conn->error);
        include 'send_email.php';
        header("Location: otp.php");
    }

}

if (isset($_POST['otp_submit'])) {
    $otp = $_POST['otp'];
    $_SESSION['otp'] = $otp;
    $sql = "SELECT * FROM tbl_users WHERE otp='$otp'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if ($check == 0){
        echo "<script defer>alert('OTP entered is wrong!'); 
        window.location = \"otp.php\"
        </script>";
    }else{
        header("Location: changepass.php");
    }
}

if (isset($_POST['changepass'])) {
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
    $get_otp = $_SESSION['otp'];
    
    if ($password1 != $password2){
        echo "<script defer>alert('Password does not match!'); 
        window.location = \"changepass.php\"
        </script>";
    }else{
        $conn->query("UPDATE tbl_users SET password='".password_hash($password1, PASSWORD_DEFAULT)."' WHERE otp='$get_otp'") or die($conn->error);
        echo "<script defer>alert('Successfully changed your password. Please login your account now.'); 
        window.location = \"index.php\"
        </script>";
    }
 

}
?>