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

// Download File in DB
if (isset($_GET['file'])) {
    $fileName= basename($_GET['file']);
    $filePath= "../alumni/files/".$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filePath);
        exit;
    }
    else{
        echo "<script type=\"text/javascript\">
        alert(\"File not found!\");
        window.location = \"forms.php\"
        </script>";
    }

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

?>