<?php

// $REMOVE_POS_SCRIPT="/bioseq/Guidance/Remove_Pos_bellow_Cutoff.pl";
$REMOVE_POS_SCRIPT="/bioseq/guidance/guidance.v2.02/www/Guidance/Remove_Pos_bellow_Cutoff.pl";
$VARS_hash_data=$_POST['VARS'];
$cutoff = $_POST['Col_Cutoff'];
$Run_Num = $_POST['run_num'];
if (!is_numeric ($cutoff))
{
	exit("illegal input");
}
if (!is_numeric ($Run_Num))
{
	exit("illegal input");
}
//echo "$VARS_hash_data<br>";
//echo "$cutoff<br>";
//echo "$Run_Num<br>";
//$command="ssh lecs 'unsetenv PERL5LIB; perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."'";

//$command="ssh biocluster 'perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."'";
//$command="/usr/bin/perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."";
//$command="/usr/bin/ssh lecs2 'perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."'";

$command="perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff;

//        echo "$command<br>";
//        echo exec ('whoami');
	$result=exec($command);
	$url="http://guidance.tau.ac.il/results/".$Run_Num."/output.php";
	header('Location:'.$url);
?>
