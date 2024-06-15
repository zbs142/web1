<!-- < ?php
if(isset($_POST['submit']))
{
    $name = $_POST['first-name'];
    $modelnumber = $_POST['number'];
    $phn = $_POST['phone-number'];
    $email = $_POST['email'];

    $fromc='info@quick-printer-setup.online';

    $toc=$email;

    $subjectc="Client Information ";
	
	  $messagec='<html>
    <head>
        <title>Client Information</title>
    </head>
    <body>
        <h1>Thanks you for joining with us!</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
            <tr>
                <th>Name:</th><td><strong>'.$name.'</strong></td>
            </tr>
            <tr>
                <th>Model Number:</th><td><strong>'.$modelnumber.'</strong></td>
            </tr>
            <tr>
                <th>Phone Number:</th><td><strong>'.$phn.'</strong></td>
            </tr>
            <tr>
                <th>Email:</th><td><strong>'.$email.'</strong></td>
            </tr>
            
        </table>
    </body>
    </html>';


    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html;charset=UTF-8" . "\r\n";

    $headers .= 'Cc: info@quick-printer-setup.online' . "\r\n";
    $headers .= 'Cc: info@quick-printer-setup.online' . "\r\n";
    $headers .= "From: <INFO> \r\n";
    mail($toc, $subjectc, $messagec, $headers,'-fno-reply@quick-printer-setup.online');
	header('location:loading.php');
}
else{ 
header('location: loading.php');
exit(0);
}


?> -->




<?php
if(isset($_POST['submit'])){
$to = 'info@quick-printer-setup.online';
$subject = "Website Query";
$from=$_POST['emailid'];
$htmlContent = '
    <html>
    <head>
        <title>Welcome to </title>
    </head>
    <body>
        <h1>Thanks you for sending your query. We will revert you soon</h1>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
             <tr style="background-color: #e0e0e0;">
                <th>Full Name:</th><td>'.$_POST['first-name'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Model Number:</th><td>'.$_POST['number'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Phone Number:</th><td>'.$_POST['phone-number'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email Address:</th><td>'.$_POST['email'].'</td>
            </tr>
			 
        </table>
    </body>
    </html>';

$htmlContent1 = '
    <html>
    <head>
        <title> Enquiry Detail</title>
    </head>
    <body>
        <h1>Someone joining with us!</h1>
       <table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">
             <tr style="background-color: #e0e0e0;">
                <th>Opertating System:</th><td>'.$_POST['quiz_checkbox'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email:</th><td>'.$_POST['emailid'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
               <th>Closest Option:</th><td>'.$_POST['feild3'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Your Printer:</th><td>'.$_POST['feild6'].'</td>
            </tr>
			  <tr style="background-color: #e0e0e0;">
                <th>Mention:</th><td>'.$_POST['feild7'].'</td>
            </tr>
			 <tr style="background-color: #e0e0e0;">
                <th>Customer Service:</th><td>'.$_POST['feild8'].'</td>
            </tr>
			 <tr style="background-color: #e0e0e0;">
                <th>Contact Number:</th><td>'.$_POST['country'].$_POST['feild9'].'</td>
            </tr>
        </table>
    </body>
    </html>';    
//$htmlContent = file_get_contents("email_template.html");
// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From:Make Your Clients<info@quick-printer-setup.online>' . "\r\n";
$headers .= 'Cc: info@quick-printer-setup.online' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
   
    header("location:loading.php");
else:
    $errorMsg = 'Email sending fail.';
    header("location:loading.php");
endif;
}
?>