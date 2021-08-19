<?php 
  //session_start(); 

  include ("templates/definitions.tpl");
  include ("templates/header.tpl");
  include ("templates/help.tpl"); //defines all the help boxes' text
	
  $cgi_page = "guidance.tau.ac.il/cgi-bin/guidance.V2.02.cgi";
  //$cgi_page = "guidance.tau.ac.il/cgi-bin/bottest.cgi";
  $results_dir = $RESULTS_DIR;
  
  $Run_Number = time(); 
  $rand_number = rand(1,9999);
  $Run_Number = $Run_Number.$rand_number;
  $contents = "";
  
  $new_dir_ans = array(create_new_directory($results_dir, $Run_Number));
  if (!($new_dir_ans[0])) {exit($new_dir_ans[1]."<br>\n");}
  
  foreach ($_POST as $key => $value) {
	$fields[$key] = $value;
  }

  $fields["Run_Number"] = "$Run_Number";
  
  $curl = curl_init($cgi_page);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($fields));
  curl_setopt($curl, CURLOPT_SAFE_UPLOAD, false); // required as of PHP 5.6.0
  //curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
  //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  //curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_exec($curl);
  //$url = curl_getinfo($curl , CURLINFO_EFFECTIVE_URL);
  curl_close($curl);
  
  //echo $url;
  
  //header("Location: ${url}");
  //exit;
  
  //$response = http_post_fields($cgi_page, $fields, NULL);
  
  function create_new_directory($dir_path, $dir_name){
	$to_return;
	if(!(mkdir($dir_path.$dir_name, 0755))):
		$to_return = array(false, "could not create the new dir!");
	else :
		$to_return = array(true);
	endif;
	return $to_return;
}
?>
