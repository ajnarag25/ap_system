<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $mail = new PHPMailer;

    $email = $emails;
    $names = "Account Verification";

    //SMTP Settings
    $mail->SMTPDebug = 0; 

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "alumniplacement123@gmail.com";
    $mail->Password = "GROUP2_APS";
    $mail->Port = 587; //465 for ssl and 587 for tls
    $mail->SMTPSecure = "tls";
    
    $file = $file_format;
    // move_uploaded_file($_FILES['files']['tmp_name'], $file);

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $names);
    $mail->addAddress($emails);
    $mail->Subject = "ALUMNI PLACEMENT SYSTEM";
    $mail->WordWrap = 50;
    $mail->AddAttachment($file);
    $mail->Body = 'Good day,'. " ".$firstname.""." ".$middlename.""." ".$lastname.". "."We would like to inform you that your account is now verified, kindly login your account credentials. Thank you and have a nice day";

    if ($mail->send())
        echo "Mail Sent";

    else
        // echo('Error sending the email');

?>