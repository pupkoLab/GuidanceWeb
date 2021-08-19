<?php 
session_start(); 
require("botdetect.php");


/*
foreach ($_POST as $key => $value)
{
  echo "{$key} = {$value}\r\n";
}
*/

// Captcha validation 
$SampleCaptcha = new Captcha("SampleCaptcha");
$SampleCaptcha->UserInputID = "CaptchaCode";
$isHuman = $SampleCaptcha->Validate();

if (!$isHuman) 
{ 
	// Captcha validation failed, redirect back to form page
	//echo 'fail 11';
	echo "botdetect.php: fail !!!";
	header("Location: indexOfer.php?captchaValid=false");
	exit;
	
}
else
{
	echo "botdetect.php: OK !!!";
	//echo system('/cgi-bin/guidance.V2.ofer.cgi');
	//echo 'OK! 22';
	// TODO: continue with form submission
}

?>

<!--!DOCTYPE html>
<html>
    <body onload="document.forms[0].submit()">
        <form action="new-location.php" method="post">
            <?php foreach( $_POST as $key => $val ): ?>
                <input type="hidden" name="<?= htmlspecialchars($key, ENT_COMPAT, 'UTF-8') ?>" value="<?= htmlspecialchars($val, ENT_COMPAT, 'UTF-8') ?>">
            <?php endforeach; ?>
        </form>
    </body>
</html-->
