<?php
$MASK="/bioseq/guidance/guidance.v2.02/www/Guidance/maskLowScoreResidues_WebServer.pl";
$VARS_hash_data=$_POST['VARS'];
$FORM_hash_data=$_POST['FORM'];



$cutoff = $_POST['cutoff'];
$aa= $_POST['type_a'];
$Run_Num = $_POST['run_num'];
if (!is_numeric ($cutoff))
{
	exit("illegal input");
}
if (!is_numeric ($Run_Num))
{
	exit("illegal input");
}

// print $cutoff." ".$aa." ".$Run_Num."<br>";
// print  $VARS_hash_data;

//echo "$VARS_hash_data<br>";
//echo "$cutoff<br>";
//echo "$Run_Num<br>";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK UserMSA.FIXED.With_Names  MSA.MAFFT.Guidance_res_pair_res.scr  Mask_Out_File_TEST $cutoff $aa";


//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK $VARS_hash_data $aa $cutoff"."'";
//$command="/usr/bin/ssh lecs2 'perl $MASK $VARS_hash_data $aa $cutoff"."'";

$command="perl $MASK $VARS_hash_data $aa $cutoff";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."'";
//$command= "ssh lecs  ; perl /bioseq/Guidance/mask.pl /bioseq/data/results/Guidance/13285408271391/input.data";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK ".$VARS_hash_data." ".$FORM_hash_data." ".$cutoff."'";
// echo "$command<br>";
//        echo exec ('whoami');

$result=exec($command);
	
	
//	$url="http://guidance.tau.ac.il/results/".$Run_Num."/output.php";
//	header('Location:'.$url);

	$url="http://guidance.tau.ac.il/results/".$Run_Num."/output.php";
header('Location:'.$url);
?>
