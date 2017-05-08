<?php
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	
	$subject = "ליד בדף נחיתה";
	$htmlMessage = "<div style='text-align: right; direction: rtl; color: #61686e; margin-top: 20px;'>
		<div style='font-size: 20px;'>" . $subject . "</div>
			
			<div style='font-size: 15px; padding: 15px;'>
				<p style='margin: 0 0 10px;'>
					<strong>שם מלא: </strong>
					" . $name . "</span>
				</p>
				
				<p style='margin: 0 0 10px;'>
					<strong>מייל: </strong>
					" . $email . "</span>
				</p>
				
				<p style='margin: 0 0 10px;'>
					<strong>נייד: </strong>
					" . $phone . "</span>
				</p>
			</div>
			
		</div>
		</div>";
		
	$headers = 'From: ' . $name ."<" . $email . ">" . "\r\n";
    $headers .='Reply-To: '. $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";   
	
	if ( mail( "shonlevi@gmail.com", $subject, $htmlMessage, $headers ) ) {
		echo 1;
	} else {
		echo 0;
	}
	
	
?>