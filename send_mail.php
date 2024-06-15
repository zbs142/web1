<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	if(isset($_POST['sendmsg'])){
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$mess = $_POST['message'];

					$message = "
						<h2>Enquiries</h2>
						
						<p>Name: ".$name."</p>
						<p>Email: ".$email."</p>
						<p>Contact: ".$contact."</p>
						<p>Message: ".$mess."</p>
						
					";

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    
				        //Server settings
				        $mail->isMAIL();       //isSMTP                                
				        $mail->Host = 'setup-mymac.xyz';                      
				        $mail->SMTPAuth = true;                               
				       
                        $mail->Username = "info@quick-printer-setup.online";
                         $mail->Password = "Rahul@143";               
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
							)         
				                                         

						);  
				           
						
						$mail->SMTPSecure = 'ssl';                           
				        $mail->Port = 465; 
				        $mail->setFrom('info@quick-printer-setup.online');            //FROM
				        
				        //Recipients
                        $mail->AddAddress("info@quick-printer-setup.online");
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'Enquiry';
				        $mail->Body    = $message;

				        $mail->send();

				       
                 header('location:installed.html');
				

			}

		

?>