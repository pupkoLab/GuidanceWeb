
<?php
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text

	session_start();
    require("botdetect.php");
	
	// CONSTANTS
	$calling_run = $_GET['run'];
	$calling_args=$_GET['args'];
    $input_file="http://mafft.cbrc.jp/alignment/server/spool/$calling_run.pir";
    $input_file_text = file_get_contents($input_file);
?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<title>Guidance server - confidence score for alignments</title>
		<link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
		<link type="text/css" rel="Stylesheet" href="stylesheet1.css" />
		<link rel="stylesheet" type="text/css" href="guidance.css" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript" src="javascript_functions.js"></script>
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/validate-form-mafft.js"></script>
		<script type="text/javascript">
			function set_rerun_program (){
				form = document.Guidance_form;
				form.Program.selectedIndex =<?php echo $PROGRAM ?>;
			}

			function set_rerun_parameters(){
				form = document.Guidance_form;	
				form.Program.selectedIndex =<?php echo $PROGRAM ?>;
				toggle_Algorithm_Options();
				var program=form.Program.selectedIndex;
				if (program=='0') //GUIDANCE
				{
					form.Bootstraps.value = <?php echo $Bootstraps?>;
					form.outorder[<?php echo $Align_Order?>].checked=true;
					form.MSA_Program.selectedIndex = <?php echo $MSA_Prog?>;
				}
				if (program=='1') //HoT
				{
					form.MSA_Program.selectedIndex = <?php echo $MSA_Prog?>;
				}
				var MSA_Program=form.MSA_Program.selectedIndex;
				
				
				if (MSA_Program=='0') //MAFFT
				{
					form.maxiterate.selectedIndex = <?php echo $MAFFT_MAX_ITERATES?>;
					form.pair.selectedIndex = <?php echo $MAFFT_REFINE?>;
				}
				if (MSA_Program=='1') //PRNAK
				{
					form.F.selectedIndex = <?php echo $PRANK_INSERTION?>;
				}
//				form.JOB_TITLE.value="GUIDANCE RUN "+<?php echo $calling_run ?>+" without sequnces with confidence score below "+<?php echo $cutoff?>;
				form.SP_COL_CUTOFF.value=<?php echo $SP_COL_CUTOFF?>; //check
				form.SP_SEQ_CUTOFF.value=<?php echo $SP_SEQ_CUTOFF?>; //check
				form.SeqType[<?php echo $Seq_Type?>].checked=true;
				if (form.SeqType[2].checked=='true')//CODONS
				{
					form.GENCODE.selectedIndex = <?php echo $CodonTable?>;
				}
				toggle_MSA_Options();
			}
		</script>
	</head>

	<body>

		<!-- GOOGLE ANALYTICS START -->
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-12265767-1");
				pageTracker._setDomainName(".tau.ac.il");
				pageTracker._trackPageview();
			} catch(err) {}
		</script>	
		<!-- GOOGLE ANALYTICS END -->

		<form name="Guidance_form"
			  id = "Guidance_form"
			  action="callCgi.php"
  		      method="post"
		      ENCTYPE="multipart/form-data"
		      onsubmit="return validateform_mafft()">

			<P align="center"><font size=+2>Select Algorithm</font>
			<select name="Program" id="Program" style="font-size: 15px;" onchange="javascript:toggle_Algorithm_Options()">
				<option value="GUIDANCE2">GUIDANCE2</option>  
				<option value="GUIDANCE">GUIDANCE</option>
				<option value="HoT">HoT</option>
   		        </select><br></p>
			<p><b>Type your Alignment </b><A href="http://en.wikipedia.org/wiki/FASTA_format"><font size=-1>(FASTA format only)</font></A><br>
			<textarea name="MAFFT_FASTA" rows=15 cols=70 id="FASTA_txt"><?php echo $input_file_text ?></textarea>
			<br><br>
			<div id="MSA_PROGRAM">
			</div>
           
     		<P align=left><font size=+1><br>Please enter your email address
<!--			<font size=+1><a href="/defaultEmailExplanation.html">-->(Optional)<!--</a></font> -->
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE="TEXT" NAME="email_add" SIZE=50 bgcolor="yellow"><br>
			<font size=2>Your email address will be used to update you the moment the results are ready. </font>
			<br><br>
			<P align=left><font size=+1><br>Job title (Optional)<br>
			<INPUT TYPE="TEXT" NAME="JOB_TITLE" SIZE=50 bgcolor="yellow"><br>
			<font size=2>Enter a descriptive job title for your GUIDANCE query</font>
			<br><br><br><br>
			<FONT size=+2 color='red'><B><U>Advanced Options</FONT></B></U></p>
			<div id="BOOTSTRAP">
	                        <B>Number of bootstrap repeats</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="Bootstraps" VALUE="100" SIZE=4></br>
			</div>

			<INPUT TYPE="hidden" NAME="SP_SEQ_CUTOFF" SIZE=4 VALUE="0.6">
            <INPUT TYPE="hidden" NAME="SP_COL_CUTOFF" SIZE=4 VALUE="0.93">
			<!-- SPECIFIC MAFFT RERUN_PARAM -->
			<INPUT TYPE="hidden" NAME="MAFFT_OUT_RUN_NEMBER" SIZE=4 VALUE="<? echo $calling_run ?>">
			<INPUT TYPE="hidden" NAME="BACK_FROM_MAFFT" SIZE=4 VALUE="1">
			<b>MAFFT Command-line arguments:</b><INPUT TYPE="hidden" NAME="MAFFT_PARAM" value="<? echo $calling_args ?>"><font size="-1"><? echo $calling_args ?></font>
			<INPUT TYPE="hidden" NAME="MSA_Program" value="MAFFT"><br><br>
			
<div class="input" style="height: 140px;">
      <?php // Adding BotDetect Captcha to the page

      $jQueryValidatedCaptcha = new Captcha("jQueryValidatedCaptcha");
      $jQueryValidatedCaptcha->UserInputID = "CaptchaCode";
      $jQueryValidatedCaptcha->CodeLength = 4;
      $jQueryValidatedCaptcha->ImageWidth = 150;
      $jQueryValidatedCaptcha->ImageStyle = ImageStyle::Graffiti2;
	  
	  if(!$jQueryValidatedCaptcha->IsSolved) { ?>
	    I'm not a Robot Captcha 
		<label for="CaptchaCode"><font size=2>type the characters from the picture:</font></label>
		<?php echo $jQueryValidatedCaptcha->Html(); ?>
		<input type="text" name="CaptchaCode" id="CaptchaCode" class="textbox" />
		<?php echo getValidationStatus('CaptchaCode'); 
	  }  ?>
	  
	  <?php 
      // remember user input if validation fails
      function getValue($fieldName) {
        $value = '';
        if (isset($_REQUEST[$fieldName])) { 
          $value = $_REQUEST[$fieldName];
        }
        return $value;
      }
      
      // server-side validation status helper function
      function getValidationStatus($fieldName) {
        // validation status param, e.g. "NameValid" from "Name"
        $requestParam = $fieldName . 'Valid';
        if ((isset($_REQUEST[$requestParam]) && $_REQUEST[$requestParam] == 0)) {
          // server-side field validation failed, show error indicator
          $messageHtml = "<label class='incorrect' for='{$fieldName}'>*</label>";
        } else {
          // server-side field validation passed, no message shown
          $messageHtml = '';
        }
        return $messageHtml;
      }
	  
    ?>
      </div>
		<script type="text/javascript" src="js/validation-rules.js"></script>
		<input type="hidden" id="solved" name="solved" value="false"/>
			<input type=submit value="Submit" id="SubmitButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear" id="buttons">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<script language="javascript" type="text/javascript">
		$("#SubmitButton").mouseover(function(){
			$("#CaptchaCode").blur();
		});
</script>						

			<br>
			<br>
			<br><br>
	</td></table>
	</form>
	<script type="text/javascript">javascript:set_rerun_parameters();</script>
	</body>
</html>
