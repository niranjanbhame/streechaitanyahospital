<?php
    $recipient="niranjan.bhame@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
	
    $sender=$_POST["fname"]; 
	
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
	
	/*$displaymessage = '<style>table > tbody > tr > td{padding: 12px 20px;line-height: 1.5384616;vertical-align: middle;}</style>';
	$displaymessage .= "<table cellpadding='0' cellspacing='0'><tbody><tr><td bgcolor='#219296' style='width: 500px;color: #ffffff;font-family: arial;height: 70px;'>Gynecologist Hospital Enquiry</td></tr></tbody></table>"
	$displaymessage .= "<table bgcolor='#f5f5f5' cellpadding='0' cellspacing='0'><tbody><tr><td style='width: 500px;font-family: arial;'><br><table cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border: 1px solid #ddd;'><tr><td style='border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;'>Name:</td> <td style='border-bottom: 1px solid #ddd;'>$sender</td></tr>\n<tr><td style='border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;'>Email:</td> <td style='border-bottom: 1px solid #ddd;'>$senderEmail</td></tr>\n\n<tr><td style='border-right: 1px solid #ddd;'>Message:</td> <td>$message</td></tr></table><br></td></tr></table>";  
	$displaymessage .= "<table cellpadding='0' cellspacing='0'><tbody><tr><td bgcolor='#cfcfcf' style='width: 500px;color: #777;font-family: arial;height: 40px;text-align:right;'>Thank You</td></tr></tbody></table>"
	*/
	
	$displaymessage = "<html><body>";
    $displaymessage .= "<style>table > tbody > tr > td{padding: 12px 20px;line-height: 1.5384616;vertical-align: middle;}</style>";
	$displaymessage .= '<table cellpadding=0 cellspacing=0><tbody><tr><td bgcolor=#219296 style=width: 500px;color: #ffffff;font-family: arial;height: 70px;>Gynecologist Hospital Enquiry</td></tr></tbody></table>';
	$displaymessage .= '<table bgcolor=#f5f5f5 cellpadding=0 cellspacing=0><tbody><tr><td style=width: 500px;font-family: arial;><br><table cellpadding=0 cellspacing=0 bgcolor=#ffffff style=border: 1px solid #ddd;><tr><td style=border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;>Name:</td> <td style=border-bottom: 1px solid #ddd;>'.$sender.'</td></tr>\n<tr><td style=border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;>Email:</td> <td style=border-bottom: 1px solid #ddd;>'.$senderEmail.'</td></tr>\n\n<tr><td style=border-right: 1px solid #ddd;>Message:</td> <td>'.$message.'</td></tr></table><br></td></tr></table>';  
	$displaymessage .= '<table cellpadding=0 cellspacing=0><tbody><tr><td bgcolor=#cfcfcf style=width: 500px;color: #777;font-family: arial;height: 40px;text-align:right;>Thank You</td></tr></tbody></table>';
	
$displaymessage .= "</body></html>";



	//$mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
	
	
	$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset: utf8\r\n";
	
    mail($recipient, $subject, $displaymessage , $headers);
	//sleep(1);
	header("Location:http://www.streechaitanyahospital.com/"); // Set here redirect page or destination page

?>