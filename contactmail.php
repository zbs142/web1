




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
                <th>Model Number:</th><td>'.$_POST['last-name'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Phone Number:</th><td>'.$_POST['telephone'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email Address:</th><td>'.$_POST['email'].'</td>
            </tr>
            <tr style="background-color: #e0e0e0;">
                <th>Email Address:</th><td>'.$_POST['message'].'</td>
            </tr>
			 
        </table>
    </body>
    </html>';

 
//$htmlContent = file_get_contents("email_template.html");
// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From:Contact Form Make Your Clients<leads@install-printer-guide.online>' . "\r\n";
$headers .= 'Cc: info@quick-printer-setup.online' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
   
    header("location:thankyou.php");
else:
    $errorMsg = 'Email sending fail.';
    header("location:thankyou.php");
endif;
}
?>