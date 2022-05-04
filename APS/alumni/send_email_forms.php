<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $mail = new PHPMailer;

    $email = $emails;
    $names = "Successfully Submitted Application Form";

    //SMTP Settings
    $mail->SMTPDebug = 0; 

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "alumniplacement123@gmail.com";
    $mail->Password = "GROUP2_APS";
    $mail->Port = 587; //465 for ssl and 587 for tls
    $mail->SMTPSecure = "tls";

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email, $names);
    $mail->addAddress($emails);
    $mail->Subject = "ALUMNI PLACEMENT SYSTEM";
    $mail->Body = 'Good day,'. " ". $firstname.".". " " .'We would like to inform you that you have successfully submitted your form. The career you choose is'.' '. $career.
    '. '.'With a field of'. ' '.$chk.' '.'We will update you for validation of your form. Thank you and Have a nice day.';


    if ($mail->send())
        echo "Mail Sent";

    else
        // echo('Error sending the email');

?>