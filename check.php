<?php
require 'PHPMailer/class.phpmailer.php';
$mail = new PHPMailer();
ini_set('diaplsy_errors', 1);
$txtOwner = isset($_POST['txtOwner'])?$_POST['txtOwner']:"";
$txtResortName = isset($_POST['txtResortName'])?$_POST['txtResortName']:"";
$txtPetResortAdd = isset($_POST['txtPetResortAdd'])?$_POST['txtPetResortAdd']:"";
$txtCity = isset($_POST['txtCity'])?$_POST['txtCity']:"";
$txtState = isset($_POST['txtState'])?$_POST['txtState']:"";
$txtZip = isset($_POST['txtZip'])?$_POST['txtZip']:"";
$txtPhone = isset($_POST['txtPhone'])?$_POST['txtPhone']:"";
$txtEmail = isset($_POST['txtEmail'])?$_POST['txtEmail']:"";
$txtAbtUs = isset($_POST['txtAbtUs'])?$_POST['txtAbtUs']:"";
$txtContct = isset($_POST['txtContct'])?$_POST['txtContct']:"";
$optradio = isset($_POST['optradio'])?$_POST['optradio']:"";

$subject = "Enquiry for Pet Resort";
$body= '<table cellpadding="5" cellspacing="0" width="50%">
        <tr><td width="50%">Owner Name : </td><td>' .$txtOwner. '</td></tr>
        <tr><td>Pet Resort Name : </td><td>' .$txtResortName. '</td></tr>
        <tr><td>Pet Resort Address : </td><td>' .$txtPetResortAdd. '</td></tr>
        <tr><td>City : </td><td>' .$txtCity. '</td></tr>
        <tr><td>State : </td><td>' .$txtState. '</td></tr>
        <tr><td>Zip : </td><td>' .$txtZip. '</td></tr>
        <tr><td>Phone Number : </td><td>' .$txtPhone. '</td></tr>
        <tr><td>Email Address : </td><td>' .$txtEmail. '</td></tr>
        <tr><td>How did you hear about us : </td><td>' .$txtAbtUs. '</td></tr>
        <tr><td>Preffered form of Contact : </td><td>' .$txtContct. '</td></tr>
        <tr><td>Would you like to speak to one of our Pet Resort Managers? : </td><td>' .$optradio. '</td></tr>
        </table>
        <br>
        <em>This is an automatically generated email.Please do not reply to this email.</em>';
//echo $body;exit;
$mail->IsSMTP();   
//$mail->SMTPDebug  = 2; // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'petresortsacquisitionsNVA@gmail.com';                // SMTP username
$mail->Password = 'Agoura101!';                     // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML
$mail->From = 'petresortsacquisitionsNVA@gmail.com';
$mail->FromName = 'Pet-Resort';
$mail->AddAddress("poonam@interskale.in");
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = $body;
if(!$mail->Send()){
    echo 'failed';
}else{
    echo 'success';
}
$mail->clearAddresses();
$mail->clearBCCs();
?>
