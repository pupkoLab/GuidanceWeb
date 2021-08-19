<?php 
session_start(); 
require("botdetect.php");

// Captcha validation 
$SampleCaptcha = new Captcha("SampleCaptcha");
$SampleCaptcha->UserInputID = "CaptchaCode";
$isHuman = $SampleCaptcha->Validate();

if (!$isHuman) 
{ 
	// Captcha validation failed, redirect back to form page
	//echo 'fail 11';
	//header("Location: indexOfer.php?captchaValid=false");
	//exit;
	echo "fail";
	exit;
}

echo "OK";
//echo system('/cgi-bin/guidance.V2.ofer.cgi');

//echo 'OK! 22';
// TODO: continue with form submission

#header("Status: 200");
#header("Location: http://guidance.tau.ac.il/cgi-bin/guidance.V2.ofer.cgi");
#exit;




// is cURL installed yet?
if (!function_exists('curl_init')){die('Sorry cURL is not installed!');}
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://guidance.tau.ac.il/cgi-bin/guidance.V2.ofer.cgi');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );

//curl_exec($ch);

$result = curl_exec ($ch) or die ('There has been an error');

echo "OK2";

//    Close the CURL handle
curl_close ($ch);
echo "OK3";
//    Process the return
print $result;
echo "OK4";

?>