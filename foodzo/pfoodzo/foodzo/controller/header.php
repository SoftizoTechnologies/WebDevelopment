<?php
	include "../config/db.php";
	
	//header('Content-type: application/json');	
	$userExists = false;
	$OTP_sent = false;
	$_SESSION['loggedIn']=false;
	$_SESSION['otp1']=0;	 
	if(!isset($_POST['mobile_number']))
	{
		return;
	}	
	
	$mobile_number = $_POST['mobile_number'];
	$_SESSION["mobile_number"]=$mobile_number;
	
	if ($link->connect_error) 
	{
		die("Connection failed: " . $link->connect_error);
	}
	
	$sql = "select cust_name from customer where cust_phone='$mobile_number'";    
	$result = $link->query($sql);	
		if($result->num_rows>0) 
	    {	 
            $userExists=true;
			$_SESSION['loggedIn']=true;
	    }	
		 else 
		{
           //$OTP_sent=true;	 
			   $ottp = generateOTP();	
			  $_SESSION['otp1']=$ottp; 
             
          } 
		 // $jsonData = array("user_exists" => $userExists, "OTP_sent" =>1234);
	
	$jsonData = array("user_exists" => $userExists, "OTP_sent" =>$_SESSION['otp1']);
	echo json_encode($jsonData);
	
	function generateOTP()
	{
		$otp = substr(preg_replace("/[^0-9]/", '', md5(uniqid())), 0, 4);
		
        require_once('../library/way2smsclient.php');
        $way2Sms = new WAY2SMSClient();
        $way2Sms->login(9620149242, 9620149242);
        $message = 'Thank you for using foodzo.com. Your verification code is ' . $otp;
        $response = $way2Sms->send($_SESSION['mobile_number'], $message);
        $way2Sms->logout();
		return $otp;
	}  

?>	
	