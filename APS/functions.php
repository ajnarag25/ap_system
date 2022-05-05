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
?>