<?php
session_start();
include "connection.php";


// Verify User
if (isset($_GET['verify'])) {
    $id = $_GET['verify'];
    $conn->query("UPDATE tbl_users SET is_verified=1 WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
}

// Update User
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $first = $_POST['fname'];
    $middle = $_POST['mname'];
    $last = $_POST['lname'];
    $user = $_POST['uname'];
    $student_no = $_POST['sno'];
    $email = $_POST['mail'];
    $conn->query("UPDATE tbl_users SET student_id='$student_no', username='$user', email='$email', firstname='$first', middlename='$middle', lastname='$last'  WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
}

// Delete User
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tbl_users WHERE user_id=$id") or die($db_link->error);
    header("Location: users.php");
   }



// Update Form
if (isset($_POST['updateForm'])) {
    $id = $_POST['id'];
    $first = $_POST['fname'];
    $middle = $_POST['mname'];
    $last = $_POST['lname'];
    $address = $_POST['address'];
    $student_no = $_POST['sno'];
    $email = $_POST['mail'];
    $conn->query("UPDATE tbl_forms SET firstname='$first', middlename='$middle', lastname='$last', student_no='$student_no', address='$address', email='$email'  WHERE id=$id") or die($db_link->error);
    header("Location: forms.php");
}

// Delete User Form
if (isset($_POST['del'])) {
    $id = $_POST['id'];
    $student_no = $_POST['student'];
    $conn->query("UPDATE tbl_users SET stat='NO FORM SUBMITTED', feedback='N/A' WHERE student_id='$student_no'") or die($db_link->error);
    $conn->query("DELETE FROM tbl_forms WHERE id=$id") or die($db_link->error);
    header("Location: forms.php");
}

// // Download File in DB
// if (isset($_GET['file'])) {
//     $fileName= basename($_GET['file']);
//     $filePath= "../alumni/files/".$fileName;

//     if(!empty($fileName) && file_exists($filePath)){
//         header("Cache-Control: public");
//         header("Content-Description: File Transfer");
//         header("Content-Disposition: attachment; filename=$fileName");
//         header("Content-Type: application/zip");
//         header("Content-Transfer-Encoding: binary");

//         readfile($filePath);
//         exit;
//     }
//     else{
//         echo "<script type=\"text/javascript\">
//         alert(\"File not found!\");
//         window.location = \"forms.php\"
//         </script>";
//     }

// }

// View PDF file
if (isset($_GET['file'])) {
    $file =  "../alumni/files/".$_GET['file'];
    $filename = "../alumni/files/".$_GET['file'];

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($file));
    header('Accept-Ranges: bytes');

    @readfile($file);

}

// Send Verification to alumni and message
if (isset($_POST['sendVerify'])) {
    $id = $_POST['student_no'];
    $verification = $_POST['radios'];
    $message = $_POST['msgs'];

    if ($verification == 'YES'){
        $conn->query("UPDATE tbl_users SET stat='VERIFIED', feedback='$message' WHERE student_id='$id'") or die($db_link->error);
        $conn->query("UPDATE tbl_forms SET status='VERIFIED' WHERE student_no='$id'") or die($db_link->error);

        echo "<script type=\"text/javascript\">
        alert(\"Successfully submitted\");
        window.location = \"forms.php\"
        </script>";

    }elseif ($verification == 'NO'){
        $conn->query("UPDATE tbl_users SET stat='NOT VERIFIED', feedback='$message' WHERE student_id='$id'") or die($db_link->error);
        $conn->query("UPDATE tbl_forms SET status='NOT VERIFIED' WHERE student_no='$id'") or die($db_link->error);

        echo "<script type=\"text/javascript\">
        alert(\"Successfully submitted\");
        window.location = \"forms.php\"
        </script>";
    }
    
}


// Update Form
if (isset($_POST['composeConcern'])) {
    $id = $_POST['id'];
    $msgs = $_POST['msg'];
    $conn->query("UPDATE tbl_concerns SET feedback='$msgs'  WHERE id=$id") or die($db_link->error);

    echo "<script type=\"text/javascript\">
    alert(\"Successfully submitted\");
    window.location = \"concerns.php\"
    </script>";
}


// Delete Concern
if (isset($_GET['concernDel'])) {
    $id = $_GET['concernDel'];
    $conn->query("DELETE FROM tbl_concerns WHERE id=$id") or die($db_link->error);
    header("Location: concerns.php");
   }

// Update Profile Admin
if (isset($_POST['update_profile'])) {
    $username = $_POST['user'];
    $password1 = $_POST['pass1'];
    $password2 = $_POST['pass2'];
    $email = $_POST['mail'];

    if ($password1 != $password2){ 
        echo "<script type=\"text/javascript\">
        alert(\"Password does not match!\");
        window.location = \"profile.php\"
        </script>";
    }else{
        $conn->query("UPDATE tbl_users SET username='$username', password='".password_hash($password1, PASSWORD_DEFAULT)."', email='$email'  WHERE user_id=1") or die($db_link->error);
        echo "<script type=\"text/javascript\">
        alert(\"Successfully updated your profile!\");
        window.location = \"profile.php\"
        </script>";
    }
}

// Change Profile Pic
if (isset($_POST['change_profile'])) {
    $target_dir = "../alumni/uploads/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);

    if($check !== false) {
    
        $uploadOk = 1;
        if ($uploadOk == 0) {
            echo "<script type=\"text/javascript\">
            alert(\"Sorry, your file was not uploaded.\");
            window.location = \"profile.php\"
            </script>";
    } else {
      move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
    }
        $sql='UPDATE tbl_users SET avatar_path="'.$target_file.'" WHERE user_id=1';
        $result = mysqli_query($conn, $sql);
        header('location: profile.php');
        
      } else {
        echo "<script type=\"text/javascript\">
        alert(\"File is not an image!\");
        window.location = \"profile.php\"
        </script>";
        $uploadOk = 0;
      }
}


if (isset($_POST['addJob'])) {
    $jobName = $_POST['jobname'];
    $jobDesc = $_POST['jobdesc'];

    $target_dir = "../alumni/uploads/";
    $target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $checkImage = getimagesize($_FILES["uploadImage"]["tmp_name"]);

    $sql = "SELECT * FROM tbl_jobs WHERE job_name='$jobName'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);
    

    if ($check == 1){
        echo "<script type=\"text/javascript\">
        alert(\"Job is already in the database!\");
        window.location = \"job.php\"
        </script>";
    }else if($checkImage == false) {
        echo "<script type=\"text/javascript\">
        alert(\"File is not an image!\");
        window.location = \"job.php\"
        </script>";
    }else{
        move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_file);
        $sql = "INSERT INTO tbl_jobs ( image, job_name, job_desc) VALUES ('$target_file', '$jobName', '$jobDesc')";
        $query=mysqli_query($conn,$sql);
        header('location: job.php');
    }
        
 
}

// Update Job
if (isset($_POST['updateJob'])) {
    $jobId = $_POST['job_id'];
    $jobName = $_POST['update_jobname'];
    $jobDesc = $_POST['update_jobdesc'];
  
    $sql="UPDATE tbl_jobs SET job_name='$jobName', job_desc='$jobDesc' WHERE id=$jobId";
    $query=mysqli_query($conn,$sql);
    header('location: job.php');
 
}

// Delete Job
if (isset($_GET['jobDel'])) {
    $id = $_GET['jobDel'];
    $conn->query("DELETE FROM tbl_jobs WHERE id=$id") or die($db_link->error);
    header("Location: job.php");
   }
?>