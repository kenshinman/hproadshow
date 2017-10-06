<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-type: application/json');

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$company_name = $_POST["company_name"];
$company_address = $_POST["company_address"];
$passport_number = $_POST["passport_number"];
$passport_issue_date = $_POST["passport_issue_date"];
$passport_expiry_date = $_POST["passport_expiry_date"];
$country = $_POST["country"];
$arrival_date = $_POST["arrival_date"];
$depature_date = $_POST["depature_date"];
$meal_type = $_POST["meal_type"];
$beverage_preference = $_POST["beverage_preference"];

// $db_name = 'activat2_register';
// $db_user = 'activat2_kay';
// $db_pass = 'P@55w0rd';
// $db_host = 'localhost';

/********* for local server********/

$db_name = 'hp2017';
$db_user = 'root';
$db_pass = '';
$db_host = 'localhost';



//creatre connection object

$to = $email;
$subject = "Your Registration | HP Connecting Together 2017";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <register@hpconnectingtogether.com/>' . "\r\n";


$mail_body = '<!DOCTYPE html><html><head><title></title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"/><style type="text/css"> /* CLIENT-SPECIFIC STYLES */ body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;}/* Prevent WebKit and Windows mobile changing default text sizes */ table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;}/* Remove spacing between tables in Outlook 2007 and up */ img{-ms-interpolation-mode: bicubic;}/* Allow smoother rendering of resized image in Internet Explorer */ /* RESET STYLES */ img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}table{border-collapse: collapse !important;}body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}/* iOS BLUE LINKS */ a[x-apple-data-detectors]{color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important;}/* MOBILE STYLES */ @media screen and (max-width: 525px){/* ALLOWS FOR FLUID TABLES */ .wrapper{width: 100% !important; max-width: 100% !important;}/* ADJUSTS LAYOUT OF LOGO IMAGE */ .logo img{margin: 0 auto !important;}/* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */ .mobile-hide{display: none !important;}.img-max{max-width: 100% !important; width: 100% !important; height: auto !important;}/* FULL-WIDTH TABLES */ .responsive-table{width: 100% !important;}/* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */ .padding{padding: 10px 5% 15px 5% !important;}.padding-meta{padding: 30px 5% 0px 5% !important; text-align: center;}.padding-copy{padding: 10px 5% 10px 5% !important; text-align: center;}.no-padding{padding: 0 !important;}.section-padding{padding: 50px 15px 50px 15px !important;}/* ADJUST BUTTONS ON MOBILE */ .mobile-button-container{margin: 0 auto; width: 100% !important;}.mobile-button{padding: 15px !important; border: 0 !important; font-size: 16px !important; display: block !important;}}/* ANDROID CENTER FIX */ div[style*="margin: 16px 0;"]{margin: 0 !important;}</style></head><body style="margin: 0 !important; padding: 0 !important;"><div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> Entice the open with some amazing preheader text. Use a little mystery and get those subscribers to read through...</div><table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr> <td bgcolor="#ffffff" align="center"><!--[if (gte mso 9)|(IE)]> <table align="center" border="0" cellspacing="0" cellpadding="0" width="500"> <tr> <td align="center" valign="top" width="500"><![endif]--> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper"> <tr> <td align="center" valign="top" style="padding: 15px 0;" class="logo"> <a href="#" target="_blank"> <img alt="Logo" src="http://brandstolife.com/hp2017/imgs/HP%20Logo.png" width="60" height="60" style="display: block; font-family: \'HP Simplified\', Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0"> </a> </td></tr></table><!--[if (gte mso 9)|(IE)]> </td></tr></table><![endif]--> </td></tr><tr> <td bgcolor="#D8F1FF" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding"><!--[if (gte mso 9)|(IE)]> <table align="center" border="0" cellspacing="0" cellpadding="0" width="500"> <tr> <td align="center" valign="top" width="500"><![endif]--> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table"> <tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td class="padding" align="center"> <a href="#" target="_blank"><img src="http://brandstolife.com/hp2017/imgs/banner.jpg" width="500" height="400" border="0" alt="Insert alt text here" style="display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px;" class="img-max"></a> </td></tr><tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td align="center" style="font-size: 25px; font-family: \'HP Simplified\', Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding">Your registration confirmation</td></tr><tr> <td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: \'HP Simplified\', Arial, sans-serif; color: #666666;" class="padding"> <p>Thanks for registering. </p><p>Your registration details is as follows:</p><table> <thead> <tr> <td></td><td></td></tr></thead> <tbody> <tr> <td><strong>Full Name</strong></td><td>'.$fullname.'</td></tr><tr> <td><strong>Email</strong></td><td>'.$email.'</td></tr><tr> <td><strong>Company Name</strong></td><td>'.$company_name.'</td></tr><tr> <td><strong>Company Address</strong></td><td>'.$company_address.'</td></tr><tr> <td><strong>Passport Number</strong></td><td>'.$passport_number.'</td></tr><tr> <td><strong>Arrival Date</strong></td><td>'.$arrival_date.'</td></tr><tr> <td><strong>Depature Date</strong></td><td>'.$depature_date.'</td></tr><tr> <td><strong>Country</strong></td><td>'.$country.'</td></tr><tr> <td><strong>Meal Type</strong></td><td>'.$meal_type.'</td></tr><tr> <td><strong>Beverage Preference</strong></td><td>'.$beverage_preference.'</td></tr><tr> <td><strong>Passport Issue Date</strong></td><td>'.$passport_issue_date.'</td></tr><tr> <td><strong>Passport Expiry Date</strong></td><td>'.$passport_expiry_date.'</td></tr></tbody> </table> </td></tr></table> </td></tr><tr> <td align="center"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td align="center" style="padding-top: 25px;" class="padding"> <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container"> <tr> <td align="center" style="border-radius: 3px;" bgcolor="#256F9C"><a href="#" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #256F9C; display: inline-block;" class="mobile-button">Visit Website &rarr;</a></td></tr></table> </td></tr></table> </td></tr></table> </td></tr></table><!--[if (gte mso 9)|(IE)]> </td></tr></table><![endif]--> </td></tr><tr> <td bgcolor="#ffffff" align="center" style="padding: 20px 0px;"><!--[if (gte mso 9)|(IE)]> <table align="center" border="0" cellspacing="0" cellpadding="0" width="500"> <tr> <td align="center" valign="top" width="500"><![endif]--> <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;" class="responsive-table"> <tr> <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;"> </td></tr></table><!--[if (gte mso 9)|(IE)]> </td></tr></table><![endif]--> </td></tr></table></body></html>';


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

function check_exists($field, $value){
	$db_name = 'hp2017';
	$db_user = 'root';
	$db_pass = '';
	$db_host = 'localhost';

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
	$query = "SELECT * FROM participants WHERE $field = '$value' ";
	$result = $mysqli->query($query);
	$count = mysqli_num_rows($result);

	if($count > 0){
		return false;
	}else{
		//soes not exist
		return true;
	}
}

if($mysqli->connect_error){
  printf('Connection Failed', $mysqli->connect_error);
	$response_array['status'] = 'error is error';
	$response_array['error_reason'] = 'No database connection';
	echo json_encode($response_array);
	return false;
}else{

	if( isset($fullname) && isset($email) && isset($company_name) && isset($company_address) && isset($passport_number) && isset($arrival_date) && isset($depature_date) && isset($country) && isset($meal_type) && isset($beverage_preference)&& isset($passport_issue_date) && isset($passport_expiry_date) ){
		
		$insert_query = "INSERT INTO `participants` (`fullname`, `email`, `company_name`, `company_address`, `passport_number`, `arrival_date`, `depature_date`, `country`, `meal_type`, `beverage_preference`, `passport_issue_date`, `passport_expiry_date`) VALUES ('$fullname', '$email', '$company_name', '$company_address', '$passport_number', '$arrival_date', '$depature_date', '$country', '$meal_type', '$beverage_preference', '$passport_issue_date', '$passport_expiry_date')";
		
		$doInsert = $mysqli->query($insert_query) or die($mysqli->error.__LINE__);
		if($doInsert){
			$done = mail($to, $subject, $mail_body, $headers);
			if($done){
				$response_array['status'] = 'success';
				echo json_encode($response_array);
			}						
		}

	}else{
		$response_array['status'] = 'error';
		$response_array['error_reason'] = 'all fields are required';
		echo json_encode($response_array);
	}

	
}


?>
