<!-- Aim:- Using PHP to send email -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Email Example</title>
</head>

<body>

    <?php
    error_reporting(0);
    include('smtp/PHPMailerAutoload.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        $admin_to = "fullstackdeveloper2303@gmail.com";
        echo smtp_mailer($admin_to, $subject, $message);
    }

    function smtp_mailer($to, $subject, $msg) {
       
        $mail = new PHPMailer();
        // $mail->SMTPDebug  = 1;
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        //    $mail->SMTPAutoTLS = true;
        $mail->SMTPSecure = 'tls';
        //$mail->Host = "smtp.hostinger.com";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = "officetesting04072022@gmail.com";
        $mail->Password = "ojnjzutzzvcbmbyt";
        $mail->SetFrom("officetesting04072022@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->AddAddress($to);
        $mail->SMTPOptions = array('ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        ));
        if (!$mail->Send()) {
            echo $mail->ErrorInfo;
        } else {

            return "<script> alert ('Send Succesfully Thank You..!'); window.location='12.php' </script>";
       
        }
    }
    
    ?>

    <h2>Email Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="to">To:</label>
        <input type="text" id="to" name="to" required><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>

</body>

</html>