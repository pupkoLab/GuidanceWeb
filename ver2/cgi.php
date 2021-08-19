<?php 
  //session_start(); 

  include ("templates/definitions.tpl");
  include ("templates/header.tpl");
  include ("templates/help.tpl"); //defines all the help boxes' text
	
  $cgi_page = "/cgi-bin/bottest.cgi";
  $results_dir = $RESULTS_DIR."test/";
  
  $Run_Number = time(); 
  $contents = "";
  
  //In case a directory with this name already exists
  //sleeps for 1 second and change the directory name
	while (file_exists ($results_dir.$Run_Number)) {
		sleep(1);
		$Run_Number = time();
	}
	$new_dir_ans = array(create_new_directory($results_dir, $Run_Number));
	if (!($new_dir_ans[0])) {exit($new_dir_ans[1]."<br>\n");}

  $cgi_page = $cgi_page . "?";
  $flag = 0;
  $from_MAFFT = 0;
  
  // check if called from MAFFT site
  if (isset($_POST["BACK_FROM_MAFFT"])) {
		$from_MAFFT = 1;
  }
  
  foreach ($_POST as $key => $value) {
    
	if (($from_MAFFT == 1) and ($key == "FASTA_txt")) {
		$contents = $value;
		continue;
	}
		
	
	if ($flag == 1) {
		$cgi_page = $cgi_page . "&";
	}
	$flag = 1;
    $cgi_page = $cgi_page . $key . "=" . urlencode($value);
    }

  // case of uploaded fasta file: upload it to results directory and send SeqFile parameter to cgi
  $error = 0;  
  if ($_FILES["SeqFile"]["name"] != "") {
	
	// replace space chars in filename
	$search = array (' ','+','&');
	$filename = str_replace($search, '_', $_FILES["SeqFile"]["name"]);
	
	// if non ascii chars: change filename to "user_upload"
	if (preg_match('/[^\x20-\x7f]/', $filename)) {
		$filename = "user_upload"; 
	}
	$target_dir = $results_dir.$Run_Number."/";
	$target_file_name = $filename . "_" . $Run_Number . ".fas";
	$target_file_path = $target_dir . $target_file_name;
	
	if (move_uploaded_file($_FILES["SeqFile"]["tmp_name"], $target_file_path)) {
		$cgi_page = $cgi_page . "&SeqFile=" .  $filename; 
	} else {
		$error = 1;
		echo "Sorry, there was an error uploading your file ".$_FILES["SeqFile"]["name"];
	}
	
  }
  
  // case called from mafft site: save MSA string to MSAFile
   if ($from_MAFFT == 1) {
	   
	   $target_dir = $results_dir.$Run_Number."/";
	   $target_file_name = "UserUploadMSA.txt";
	   $target_file_path = $target_dir . $target_file_name;
	  
	   if (file_put_contents($target_file_path, $contents)) {
		   $cgi_page = $cgi_page . "&MSAFile=" . $target_file_name;
	   }
	   else {
			$error = 1;
			echo "Sorry, there was an error writing MSA file ".$target_file_path;
	   } 
       		
   }
   
  // pass run number 
  $cgi_page = $cgi_page . "&Run_Number=" . $Run_Number;
  
  if ($error == 0) {
	header("Location: ${cgi_page}");
  }
  exit;
  
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