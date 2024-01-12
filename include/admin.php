<?php
require 'php/PHPMailer.php';
require 'php/Exception.php';
require 'php/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


 class admin extends DB{
	 
	function get_single_field($field,$table,$id,$value)
	{
		$select = $this->get_row("Select `$field` from `$table` where `$id`='".$value."'");
		return $select[$field];
	}
	 
	function get_single_result($table,$id,$value,$page)
	{
		$select = $this->get_row("Select * from `$table` where `$id`='".$value."'");
		if(is_array($select) && !empty($select)){
		return $select;
		}else{
			$_SESSION['error'] = "Not Found";
			$this->locate($page);	
		}
	}
	
	function locate($page){
		header('Location:'.$page);
		die;
	}
	
	function booknow()
	{
		$name = $this->escape($_POST['names']);
		$email = $this->escape($_POST['email']);
		$phone = $this->escape($_POST['phone']);
		$servicecenter = $this->escape($_POST['servicecenter']);
		$type_of_service = $this->escape($_POST['type_of_service']);
		$hyundai_value = $this->escape($_POST['hyundai_value']);
		$registration_number = $this->escape($_POST['registration_number']);
		$message = $this->escape($_POST['message']);
		
		$insert = $this->insert("Insert Into `hy_booknow` SET `name`='".$name."',`email`='".$email."',`phone`='".$phone."',`service`='".$servicecenter."',`hyundai_value`='".$hyundai_value."',`registration_number`='".$registration_number."',`description`='".$message."',`type_of_service`='".$type_of_service."',`added_date`='".date('Y-m-d H:i:s')."'");
		
		if($insert){
			
			$body = [
                    ['Attribute' => 'ProspectStage', 'Value' => 'Booking'],
                    ['Attribute' => 'Source', 'Value' => 'Website'],
                    ['Attribute' => 'EmailAddress', 'Value' => $email],
                    ['Attribute' => 'FirstName', 'Value' => $name],
                    ['Attribute' => 'Phone', 'Value' => $phone],
					['Attribute' => 'Location', 'Value' => $servicecenter],
					['Attribute' => 'TypeOfService', 'Value' => $type_of_service],
					['Attribute' => 'CarModel', 'Value' => $hyundai_value],
					['Attribute' => 'RegistrationNumber', 'Value' => $registration_number],
					['Attribute' => 'Message', 'Value' => $message]
					
                   ];

                  $post_data = json_encode($body, JSON_UNESCAPED_SLASHES);

                  $url = "https://asyncapi-in21.leadsquared.com/lead/capture?accessKey=u\$r848a7d93fa8c8c9ac68701fad3a6ce57&secretKey=47bc36ebe8bb1d532da10f7e49a978cb7373d0be";
                  $curlN = curl_init();
                  curl_setopt_array($curlN, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $post_data,
                    CURLOPT_HTTPHEADER => array(
                      'Content-Type: application/json',
                      'x-api-key: em1WfcfNzJ5Wk3irfstKRa6Xo1MHiDJr1K1da43P'
                    ),
                  ));
                  $response = curl_exec($curlN);
                  $httpcode = curl_getinfo($curlN, CURLINFO_HTTP_CODE);
                  curl_close($curlN);
				 
			$html = '<html><body><table width="50%">
			<tr><td>Name</td><td>'.$name.'</td></tr>
			<tr><td>Email</td><td>'.$email.'</td></tr>
			<tr><td>Phone</td><td>'.$phone.'</td></tr>
			<tr><td>Location</td><td>'.$servicecenter.'</td></tr>
			<tr><td>TypeOfService</td><td>'.$type_of_service.'</td></tr>
			<tr><td>Message</td><td>'.$registration_number.'</td></tr>
			<tr><td>RegistrationNumber</td><td>'.$message.'</td></tr>
			</table></body></html>';
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <no-reply@merakiads.in>' . "\r\n";
			$subject = 'Book Now';
			/* mail('bikramjit1988@gmail.com',$subject,$html,$headers); *///
			$this->sendEmail($html, $subject, $email, $name);
			$_SESSION['success'] = "Thanks for contacting us";
			$this->locate('booknow.php');

			
		}
		
	}
	
	function testdrive()
	{
		$name = $this->escape($_POST['names']);
		$email = $this->escape($_POST['email']);
		$phone = $this->escape($_POST['phone']);
		$date = $this->escape($_POST['date']);
		$time = $this->escape($_POST['time']);
		$address = $this->escape($_POST['address']);
		$preferred_outlet = $this->escape($_POST['preferred_outlet']);
		$pincode = $this->escape($_POST['pincode']);
		$car = $this->escape($_POST['car']);
		$message = $this->escape($_POST['message']);
		
		$insert = $this->insert("Insert Into `hy_testdrive` SET `name`='".$name."',`email`='".$email."',`phone`='".$phone."',`message`='".$message."',`date`='".$date."',`time`='".$time."',`address`='".$address."',`car`='".$car."',`pincode`='".$pincode."',`preferred_outlet`='".$preferred_outlet."',`added_date`='".date('Y-m-d H:i:s')."'");
		
		if($insert){
			$body = [
                    ['Attribute' => 'ProspectStage', 'Value' => 'Test Drive'],
                    ['Attribute' => 'Source', 'Value' => 'Website'],
                    ['Attribute' => 'EmailAddress', 'Value' => $email],
                    ['Attribute' => 'Date', 'Value' => $date],
                    ['Attribute' => 'Time', 'Value' => $time],
                    ['Attribute' => 'Address', 'Value' => $address],
                    ['Attribute' => 'PreferredOutlet', 'Value' => $preferred_outlet],
                    ['Attribute' => 'Pincode', 'Value' => $pincode],
                    ['Attribute' => 'Car', 'Value' => $car],
                    ['Attribute' => 'FirstName', 'Value' => $name],
                    ['Attribute' => 'Phone', 'Value' => $phone],
					['Attribute' => 'Message', 'Value' => $message]
					
                   ];

                  $post_data = json_encode($body, JSON_UNESCAPED_SLASHES);

                  $url = "https://asyncapi-in21.leadsquared.com/lead/capture?accessKey=u\$r848a7d93fa8c8c9ac68701fad3a6ce57&secretKey=47bc36ebe8bb1d532da10f7e49a978cb7373d0be";
                  $curlN = curl_init();
                  curl_setopt_array($curlN, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $post_data,
                    CURLOPT_HTTPHEADER => array(
                      'Content-Type: application/json',
                      'x-api-key: em1WfcfNzJ5Wk3irfstKRa6Xo1MHiDJr1K1da43P'
                    ),
                  ));
                  $response = curl_exec($curlN);
                  $httpcode = curl_getinfo($curlN, CURLINFO_HTTP_CODE);
                  curl_close($curlN);
			$html = '<html><body><table width="50%">
			<tr><td>Name</td><td>'.$name.'</td></tr>
			<tr><td>Email</td><td>'.$email.'</td></tr>
			<tr><td>Phone</td><td>'.$phone.'</td></tr>
			<tr><td>Date</td><td>'.$date.'</td></tr>
			<tr><td>Time</td><td>'.$time.'</td></tr>
			<tr><td>Car</td><td>'.$car.'</td></tr>
			<tr><td>Message</td><td>'.$message.'</td></tr>
			
			</table></body></html>';
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <no-reply@merakiads.in>' . "\r\n";
			$subject = 'Test Drive';
			/* mail('bikramjit1988@gmail.com',$subject,$html,$headers); */
			$_SESSION['success'] = "Thanks for contacting us";
			$this->locate('https://mukeshhyundai.com/#book_drive');
		}
		
	}
	
	function roadside()
	{
		$name = $this->escape($_POST['names']);
		$email = $this->escape($_POST['email']);
		$phone = $this->escape($_POST['phone']);
		
		$message = $this->escape($_POST['message']);
		
		$insert = $this->insert("Insert Into `hy_roadside` SET `name`='".$name."',`email`='".$email."',`phone`='".$phone."',`message`='".$message."',`added_date`='".date('Y-m-d H:i:s')."'");
		
		if($insert){
			$body = [
                    ['Attribute' => 'ProspectStage', 'Value' => 'Road Side'],
                    ['Attribute' => 'Source', 'Value' => 'Website'],
                    ['Attribute' => 'EmailAddress', 'Value' => $email],
                    ['Attribute' => 'FirstName', 'Value' => $name],
                    ['Attribute' => 'Phone', 'Value' => $phone],
					['Attribute' => 'Message', 'Value' => $message]
					];

                  $post_data = json_encode($body, JSON_UNESCAPED_SLASHES);

                  $url = "https://asyncapi-in21.leadsquared.com/lead/capture?accessKey=u\$r848a7d93fa8c8c9ac68701fad3a6ce57&secretKey=47bc36ebe8bb1d532da10f7e49a978cb7373d0be";
                  $curlN = curl_init();
                  curl_setopt_array($curlN, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $post_data,
                    CURLOPT_HTTPHEADER => array(
                      'Content-Type: application/json',
                      'x-api-key: em1WfcfNzJ5Wk3irfstKRa6Xo1MHiDJr1K1da43P'
                    ),
                  ));
                  $response = curl_exec($curlN);
                  $httpcode = curl_getinfo($curlN, CURLINFO_HTTP_CODE);
                  curl_close($curlN);
			$html = '<html><body><table width="50%">
			<tr><td>Name</td><td>'.$name.'</td></tr>
			<tr><td>Email</td><td>'.$email.'</td></tr>
			<tr><td>Phone</td><td>'.$phone.'</td></tr>
			
			<tr><td>Message</td><td>'.$registration_number.'</td></tr>
			
			</table></body></html>';
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <no-reply@merakiads.in>' . "\r\n";
			$subject = 'Test Drive';
			/* mail('bikramjit1988@gmail.com',$subject,$html,$headers); */
			$_SESSION['success'] = "Thanks for contacting us";
			$this->locate('https://mukeshhyundai.com/rsa.html');
		}
		
	}
	
	function enquire_now()
	{
		$carname = $this->escape($_POST['carname']);
		$accessname = $this->escape($_POST['accessname']);
		$names = $this->escape($_POST['names']);
		$email = $this->escape($_POST['email']);
		$phone = $this->escape($_POST['phone']);
		$page = $this->escape($_POST['page']);
		
		
		
		$insert = $this->insert("Insert Into `hy_enquire_now` SET `carname`='".$carname."',`email`='".$email."',`accessories`='".$accessname."',`name`='".$names."',`mobile`='".$phone."',`added_date`='".date('Y-m-d H:i:s')."'");
		
		if($insert){
			$body = [
                    ['Attribute' => 'ProspectStage', 'Value' => 'Enquire Now'],
                    ['Attribute' => 'Source', 'Value' => 'Website'],
					['Attribute' => 'Car Name', 'Value' => $carname],
                    ['Attribute' => 'Accessories', 'Value' => $accessname],
                    ['Attribute' => 'EmailAddress', 'Value' => $email],
                    ['Attribute' => 'FirstName', 'Value' => $names],
                    ['Attribute' => 'Phone', 'Value' => $phone]
					
					];

                  $post_data = json_encode($body, JSON_UNESCAPED_SLASHES);

                  $url = "https://asyncapi-in21.leadsquared.com/lead/capture?accessKey=u\$r848a7d93fa8c8c9ac68701fad3a6ce57&secretKey=47bc36ebe8bb1d532da10f7e49a978cb7373d0be";
                  $curlN = curl_init();
                  curl_setopt_array($curlN, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $post_data,
                    CURLOPT_HTTPHEADER => array(
                      'Content-Type: application/json',
                      'x-api-key: em1WfcfNzJ5Wk3irfstKRa6Xo1MHiDJr1K1da43P'
                    ),
                  ));
                  $response = curl_exec($curlN);
                  $httpcode = curl_getinfo($curlN, CURLINFO_HTTP_CODE);
                  curl_close($curlN);
			$html = '<html><body><table width="50%">
			<tr><td>Car Name</td><td>'.$carname.'</td></tr>
			<tr><td>Accessories</td><td>'.$accessname.'</td></tr>
			<tr><td>Name</td><td>'.$names.'</td></tr>
			<tr><td>Email</td><td>'.$email.'</td></tr>
			<tr><td>Phone</td><td>'.$phone.'</td></tr>
			
			
			
			</table></body></html>';
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <no-reply@merakiads.in>' . "\r\n";
			$subject = 'Test Drive';
			/* mail('bikramjit1988@gmail.com',$subject,$html,$headers); */
			$_SESSION['success'] = "Thanks for contacting us";
			$this->locate($page);
		}
		
	}

	function sendEmail($html, $subject, $fromEmail, $name) {
		$mail = new PHPMailer(true);

		// Settings
		$mail->IsSMTP();
		$mail->CharSet = 'UTF-8';

		$mail->Host       = "smtp.gmail.com";    // SMTP server example
		$mail->SMTPDebug  = SMTP::DEBUG_SERVER;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "campusive@gmail.com";            // SMTP account username example
		$mail->Password   = "ejsqjdvqaytygflr";            // SMTP account password example

		$mail->setFrom('support@sysbean.com', 'Website Auto-Enquiry');
		$mail->addAddress('sayanti@sysbean.com', 'Mukesh Hyundai');
		// $mail->addAddress('tinnychowdhury1999@gmail.com', 'Mukesh Hyundai');
        $mail->addAddress('soumajit@karini.in', 'Mukesh Hyundai');
		$mail->addAddress('digital.marketing@karini.in', 'Mukesh Hyundai');
		$mail->addAddress('mukeshhyundai@karini.in', 'Mukesh Hyundai');
		$mail->addReplyTo($fromEmail, $name);

		// Content
		$mail->isHTML(true);                       // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $html;

		$mail->send();
	}
	
 }
?>