<?php
# $CONCAT="/bioseq/Guidance2_tests/www/Guidance/Concat_ALN_Simple_FileList.pl";
$CONCAT="/bioseq/guidance/guidance.v2.02/www/Guidance/Concat_ALN_Simple_FileList.Web.pl";

$NumOfMSAs = $_POST['NumOfMSAs'];
$Run_Num = $_POST['run_num'];

if (!is_numeric ($NumOfMSAs))
{
	exit("illegal input: '$NumOfMSAs'");
}
if (!is_numeric ($Run_Num))
{
	exit("illegal input: '$Run_Num'");
}

$WorkingDir="/bioseq/data/results/Guidance/$Run_Num/";
$MSA_List=$WorkingDir."List_Of_Default_and_AltMSAs.txt";
$Num_of_Alt=$NumOfMSAs-1; # the base MSA is already included in the NumOfMSAs by the form
$OutName="SuperMSA_DefaultMSA_and_". $Num_of_Alt ."_Alt.fas";
$Out=$WorkingDir.$OutName;

$results_URL="http://guidance.tau.ac.il/results/".$Run_Num."/";
$OutLink=$results_URL."$OutName";
$OutHTML=$WorkingDir."output.php";

// print $cutoff." ".$aa." ".$Run_Num."<br>";
// print  $VARS_hash_data;

//echo "$VARS_hash_data<br>";
//echo "$cutoff<br>";
//echo "$Run_Num<br>";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK UserMSA.FIXED.With_Names  MSA.MAFFT.Guidance_res_pair_res.scr  Mask_Out_File_TEST $cutoff $aa";


//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK $VARS_hash_data $aa $cutoff"."'";
//$command="/usr/bin/ssh lecs2 'perl $CONCAT $MSA_List $NumOfMSAs $Out YES $WorkingDir"."'";
$command="perl $CONCAT $MSA_List $WorkingDir$OutName $NumOfMSAs NO YES $OutHTML";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $REMOVE_POS_SCRIPT ".$VARS_hash_data." ".$cutoff."'";
//$command= "ssh lecs  ; perl /bioseq/Guidance/mask.pl /bioseq/data/results/Guidance/13285408271391/input.data";

//$command="ssh lecs 'unsetenv PERL5LIB; perl $MASK ".$VARS_hash_data." ".$FORM_hash_data." ".$cutoff."'";
// echo "$command<br>";
//        echo exec ('whoami');


echo "<script type='text/javascript'>alert('$command');</script>";
$result=exec($command);
	
	
//	$url="http://guidance.tau.ac.il/results/".$Run_Num."/output.php";
//	header('Location:'.$url);

$url=$results_URL."output.php";

header('Location:'.$url);
?>