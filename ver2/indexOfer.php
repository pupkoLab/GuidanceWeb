<?php session_start(); ?>
<?php require("botdetect.php"); ?>


<?
//print "<BR>\n";
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text
	//include("../../captcha/captchaDisplay.php");
?>



		<link rel="stylesheet" type="text/css" href="guidance.css" />
		<script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- recaptcha -->
        <script type="text/javascript" src="javascript_functions.js"></script>
		<script type="text/javascript">
			function LoadExample(){
			   form = document.Guidance_form
			   form.reset();
			   form.FASTA_txt.value = ">NC_001802.HXB2\nMQPIPIVAIVALVVAIIIAIVVWSIVIIEYRKILRQRKIDRLIDRLIERAEDSGNESEGEISALVEMGVEMGHHAPWDVDDL\n>EF637049.B\nMQSLQIVAIVALVVTAIIAIVVWSIVLIEYRKLLRQRKIDRLIDRIRERAEDSGNESEGDQEELAGLVERGHLAPWDVDDL\n>EF514700.B\nMQPLEILAIVALVVAIILAIVVWTIVFIEYKKILRQRKIDRLIDRIAERAEDSGNESEGDQEELSALVDMGHDAPWVVVDQ\n>DQ056417.C\nMLESIDYRLGVAALLLALIIAIIVWIIAYLEYRKLLRQRRIDKLIKRIRERAEDSGNESEGDIEELSTMVDVEHLRLLDVNNL\n>AY463217.C\nMVDLLAGVDYRVGVGALIIALIIAIIVWIWVYIEYRKLLRQRKIDWLIKRLREREEDSGNESEGDTEELATMVDMGHLRLLDDNNV\n>DQ011165.C\nMLNFLAGVDYRIGVGALIVGLIIAIVVWIIVYLEYRKLVKQRKIDWLIERIRERAEDSGNESEGDTEELATMVDMGHLRLLDAYDL\n>AB254142.C\nMINFAARVDYRVGVAAFTIALIIAIVVWIIVYLELVRQRKIDQLIIRIREREEDSGNESEGDIEELSTMVDMGQLRLLDGNGL\n>AY901969.C\nMVNLLEKVNLFEKVDYRLGVGALLIALVIAIIVWTIAYIEYRKLVRQRKIDWLVKRIRERAEDSGNESDGDTEELSTMVDLGHLRLLDVAEL\n>EU110088.A1\nMNQLQILAIXGLVVALILAIVVWTIVGIEYRKLLRQRRIDRLIKRISERAEDSGNESDGDTEELSQLVEMGNYNLGFDDNL\n>AB253428.A1\nMQLLEICAVVGLVVALIIAIVVWTIVGIEYKKLLKQRKIDRLVDRIRERAEDSGNESDGDREELSLLVDMGDYDLGDDNNL\n>AF457052.A1\nMLSALEICAIAGLVIALIIAIVVWTIVGIEYRRLLKQRKIDRLIERIRERAEDSGNESDGDTEELAALIEMGNYDLGDANDL\n>AF077336.F1\nMSYLLAIGIAALIVALIIAIVVWTIVYIEYKKLVRQRKINKLYKRIRERAEDSGNESEGDAEELAALGEMGPFIPGDINNL\n>DQ168575.G\nMKSLEISAIVGLIVAFIAAIVVWTIVLIEYRKIRKQKRIDKILDRIRERAEDSGNESEGDTEELATLVDMVDFEPWVGDNL\n>AY795907.D\nMQTLEILSIVALVIAAIIAIIVWTIVYIEYRKIRRQRKIDQLIDRIRERAEDSGNESEGDEEELSTLMEMGHAAPWNVADDL\n>EF394358.PTS\nMVKIVVGSVLTNVIGAFCILLILIGGGLLIIAFVRRELERERQHQRVIERLVRRLSIDSGIDEDEELNWNNFDPHNFNPRDWI\n>AF103818.PTT\nMLNWFEIGLIALGIEGILVVIIWGLVARLWRQIKIKENTQQEIQNLLERIRIREEDSGNESDGEEEETLAKLLSSLELDNPRIV\n>DQ373066.PTT\nMQLEIVLIILFIALMLVAIFAWIAAYKEYKKLQQVRRIERLQDRIRSRAEDSGNESDGDEILLVEELMQVHQHQVNPDWMDRILFW\n>DQ373063.PTT\nMDIVQQVGLLVVLIIELVIVIVIWVKVYKLCKEDRRQKKIDRLIARIRERAEDSGNESDGDTEELQDLITEGDNLMHIGIRDNRNN\n>DQ373065.PTT\nMLLLIKLGFIGLAIETLIVIVVWAIVYRIYREVKVEEKISQLRQRIRDRAEDSGNESDGDAEELANLLPPDRIDQDNWV\n>EF535994.PTT\nMEIFIILGLIGIVIELVIAIVVWLKAYECYKALKRQERRDQLIDRIRERAEDSGNESDGDTEELEAILIPEDRHVLVAIRGY\n>DQ373064.PTT\nMDLIELGLIGLVIELIIVIVVWLKAYQLYKENIRQKAINKLIERIRERGEDSGNESEGDMDELHAILRSGDPELVLIDN\n>AY169968.PTT\nMILIALGCLAIALILLNIFIWRNLWRLCKQNKLEVEIENLALRLTERAEDSGNESDGGEEEKLQRLLHDHDNMHGFANPLFDI\n>EF535993.PTT\nMLTWEQIGLIALGIEGIIATVVWGIAFITWRRRKIEEDRAQKIIDLLERIRARQDDSGNESDGEDQRQLMAYGFDNPMFDW\n>U42720.SIVCPXANT\nMTNIFEYAFLAFSIVLWIICIPILYKLYKIYKQQQIDNKRNQRIIEVLSRRLSIDSAIEEDEEADTYYLGSGFANPVYREGDE\n>AF382828.SIVCPXGAB2\nMLSMWVAIGLIGIGTLLVINIVVWGIVGISVYKRWKRHKEEQRIIDLIIKITERAEDSGNESDGEDKETLATLLHNNGFDNPMFEDRI\n>DQ017383.N\nMLELGFIAFGVAIIIAVIIWVLLYKEYKEIKLQEKIEKIRQRIRDRAKESGKESDGDAEWLGDKESVGDDEWLAILLSPDKLDNWV\n>AY169807.O\nMLHRDLLLLIIISALLLTNIILWMFVLRKYLEIKKQERREREILERLRXIREIRDDSDYESNEEEEQEVRDHLVHTFGFANPMFEI\n>AY169811.O\nMHHRDLLTLIAVSALLFINIILWIYVLRKYLEQRKQDRREREILERLRRIXEIGDDSDYESNEEEEQEVMDLVHNHGFDNPMFEP\n>AY169804.O\nMHQRDLLILIAVSILCLICILVWTFNLRKYLEHRKQDKREREILERLRRVREIRDDSDYESBGEEEQEVMDLIHSHGFANPLFEL\n>AJ302646.O\nMHHRDLLALITTSALLLTNVVLWTFILRQYLKQKKQDKREREILERLRRIRQIEDDSDYESDGTEEQEVRDLVHSYGFDNPMFEL\n>AY169803.O\nMHYRDLSTLIIVSALLLINVXLWMFILRXYLEHKRQERREREILERLRRIREIKDDSDYESNGEEEQEVMDLVHSHGFDNPMFEL\n>AY169810.O\nMNYKELLSLIVVSVLLLAAIVIWMFILKKYLEQKEQDRRERELLKRIERLXEXRDDSDYESNGDEEQEVMHLVHTHGFANPMFEL\n>AY169815.O\nMQHKDLLILIITSALLLINVILWLFVLKQCLEQKKQTKREREIIRRLRRIREIEDDSDYESNGEEEQTVRDLIHSHGFDNPMFEL\n>AY169809.O\nMQYKGLLLIIIALLLINVXVWMFNLRKYLEQKKQERREREVINRLRRIREVKDDSDYESNGEEEQEVMELVHSHGFDNPMFEL\n>AY169806.O\nMYKDQIILIIIFCVVFLIAACIWLFILKTYLEQKKQDRREKELLRRLQRIIEIRDDSDYESNGEEEQEVMDLVHEHGFVNPMFEL\n>FJ424864.GOR\nMHPRDIIVIIIGITLLAVTVIIWLKIFALYLRDRRERRFFDRLERLLSNKEDEGYESNEEEAAELMEMGNELGFDFNLH\n>AJ549283.CERCOPITHECUS\nMNTYWIAAISVWCVIVLLAPCTLYLLYQSYKEHKRVSRFEQDFQRLVQXYQEXDSGYEDEDEDHNSFDNPLFDDGDPDQWV\n>AY340701.CERCOPITHECUS\nMNYWWSLVAITYSLILIALPVAAWAWWRYYKITKRFKRIDQEIQRLIQIHERRRHDSGVDTESESEQHEETHGFVNPVFNDDFGEWV\n>AF468658.CERCOPITHECUS\nMSAAALWWWGAAVITFIYFCLAIFALYLAWDKWIKGKPKIPVAVIRLVEDDEESGIFEDASSEPNAYGFANPGFEV\n>AJ580407.CERCOPITHECUS\nMLKIKLGPIEYVCLVFAVVITWIAAIGVGYLAYRAYKSYREELRYIRLRLWSIDSGYESSQEDP\n>AY340700.CERCOPITHECUS\nMNYWYLAAVIVTGIYFVIAIFAFVLAYQRWCKPKKVEVSVIRLLEEGDGDSGIFEDAEDDMAESEHHAFANPAFEQ\n>AF468659.CERCOPITHECUS\nMHPAAVWWWGAAIITFIYLCVALLALYLAWDKWVKGKPKPTQVAVIRLIEDEEDSGIYDDASSELTGFNGFANPGFEV\n>EF070331.SIVMUS01CM2500\nMNWWWFAAAVVTAIYFVIALVAFVLAYQRWCQPQKGQVEVNVIRLLEEGDTDSGIFEDAEDGSDDQRHGFLNPAFEL\n>EF070329.SIVMUS01CM1246\nMHYWYLGAAIVTAIYLVIALVAFILAYQRWCQPKPPIEVNVLRLLEEGDSDSGIFEDACDGEDEDSHRAFANPSFEP\n";
			   form.SeqType[0].checked=true;
			   form.Program[0].checked=true;
//			   form.SP_COL_CUTOFF.value=0.7;
//		    	   form.SP_SEQ_CUTOFF.value=0.6;
			   form.Program.selectedIndex = 0;
			   toggle_Algorithm_Options();
			   form.MSA_Program.value = "MAFFT";
		           form.MSA_Program.selectedIndex = 0;
			   toggle_MSA_Options();
			   return true;
			}
			function validate() {
//---------------------------------------
//	 alert("Due to system maintenance, the server is not reachable at the moment.\nWe apologize for the inconvenience.")
//     return false
//---------------------------------------
				form = document.Guidance_form
				if ((form.SeqFile.value == "")&&(form.FASTA_txt.value=="")){
					alert("Please provide sequences as Text or File")
					form.SeqFile.focus()
					return false
				}
				//confirm ("In validate")
				if ((form.SeqFile.value != "")&&(form.FASTA_txt.value!="")){
					alert("Please provide sequences as Text or File (not both)")
						form.SeqFile.focus()
						return false
				}
				SeqType="";
				for (i=0;i<document.forms[0].SeqType.length;i++) {
					if (document.forms[0].SeqType[i].checked) {
						SeqType= document.forms[0].SeqType[i].value;
					}
				}
				if (SeqType==""){
					alert("Please indicate the sequences type: Amino Acids/Nucleotides/Codons")
					return false
				}	
				if (form.Bootstraps.value == ""){
					confirm("number of bootstrap repeats was set to default value (100)")
					form.Bootstraps.focus()
					form.Bootstraps.value=100
					return false
			    }
				if (form.Bootstraps.value > 100){
					confirm("The maximal number of bootstrap repeats is 100")
					form.Bootstraps.focus()
					form.Bootstraps.value=100
					return false
			    }
				if (form.Bootstraps.value < 2){
					confirm("The minimal number of bootstrap repeats is 2")
					form.Bootstraps.focus()
					form.Bootstraps.value=100
					return false
			    }
								
			//	if (form.FP_Col.value ==""){
			//		confirm("False Positive cutoff for removing columns was set to default value (0.12)")
                        //                form.FP_Col.focus()
                        //                form.FP_Col.value=0.12;
                        //        }
//				if (form.SP_SEQ_CUTOFF.value == ""){
//                                        confirm("Removing sequences cutoff was set to default value (0.6)")
//                                        form.pdbFile.focus()
//                                        form.SP_SEQ_CUTOFF.value=0.6;
//                                }

//				if (form.SP_COL_CUTOFF.value == ""){
//                                        confirm("Removing columns cutoff was set to default value (0.93)")
//                                        form.pdbFile.focus()
//                                        form.SP_COL_CUTOFF.value=0.93;
//                                }
//				else{
//					alertconfirm (true)
//					return true
//				}
				return true	
			}
		</script>
		
	  <link type="text/css" rel="Stylesheet" href="<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	  
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


<!--
<font color=red>
<center><h2>**** IMPORTANT NOTICE: ****</h2></center>
<h4>Due to maintenance work, GUIDANCE server is not available right now.<BR>
We are sorry for the inconvenience and hope it will be up again shortly<BR><BR>
</h4>
</center>
</font>


<font color=red>
 <center><h2>*** IMPORTANT NOTICE ***</h2></center>
 <center><h3> Due to maintenance works <br>scheduled for 28.8.2011, <br>Guidance server will not be available during this time.
 <br />We apologize for the inconvenience.<br>
 </h3></center>
 </font>
-->	 
<!--
<font color=purple>	 
<center><h2>--- Attention ---</h2></center>
<center><h3>Due to a temporary problem, an e-mail message will not be sent when calculation is finished.<br>
In order to view your results, please bookmark the page after submiting.<br>
 </h3></center>
 </font>


<font color=red>
<h2 align="left">Note:</h2>
<h4 align="left">Results will be kept on the server for two months.<BR>
For further use please save data locally.</h4>
</left>
</font>
-->
<!--
<font color=red>
<center><H3>**** IMPORTANT NOTICE: ****</H3></center>
<H2>Due to maintenance work, GUIDANCE server will not be available until June 19th 2011.<BR>
We are sorry for the inconvenience<BR><BR></h2>
</h3>
</center>
</font>
-->
		

		<!--form name="Guidance_form" action="botdetectValidate.php" method="post" ENCTYPE="multipart/form-data" onsubmit="return validate()"-->
		<form name="Guidance_form" action="/cgi-bin/guidance.V2.ofer.cgi" method="post" ENCTYPE="multipart/form-data" onsubmit="return validate()">
		<!--form name="Guidance_form" action="/cgi-bin/guidance.V2.ofer.cgi" method="post" ENCTYPE="multipart/form-data" onsubmit="return validate()"-->
		
		<script>/*
			$("form").submit(function() 
			{
				// submit captcha form
				
				// if success
					// continue to cgi
				// else
					// cancel submit
				
				
				var userInput = $('#CaptchaCode').val();
				alert(userInput);
				
				$.ajax({
				   //url: 'hello.php',
				   url: 'botdetectValidate.php',
				   success: function (response) {//response is value returned from php 
					 alert(response);
					 
					 if (response == "botdetect.php: OK !!!")
					 {
						alert("jquery: good :-)");
					 }
 					 else
					 {
						alert("jquery: bad...");
					 }
					 
				   }
				});
				

			});*/
		</script>

	
			<P align="center"><img src="new.png" WIDTH=50>&nbsp;<font size=+2>Select Algorithm</font>
 		   		<select name="Program" id="Program" style="font-size: 15px;" onchange="javascript:toggle_Algorithm_Options()">
				<option value="GUIDANCE2">GUIDANCE2</option>
			        <option value="GUIDANCE">GUIDANCE</option>
				<option value="HoT">HoT</option>
				  </select>&nbsp;<img src="new.png" WIDTH=50><br></p>
                <div id="GUIDANCE_WARN">
			    <p align="center"><b><font size="-1" color="red">Warning:</font><font size="-1"color="black"> GUIDANCE is not suitable for alignments of very few sequences.<br>As a rule of thumb, use GUIDANCE2 or HoT for less than 8 sequences.</font></b></p>
			</div>    
<p><b>Type your sequences </b><A href="http://en.wikipedia.org/wiki/FASTA_format"><font size=-1>(FASTA format only)</font></A><br>
			<textarea name="FASTA_txt" rows=8 cols=70 id="FASTA_txt"></textarea><br>OR<br>
			<b>Upload your sequences file <A href="http://en.wikipedia.org/wiki/FASTA_format"><font size=-1>(FASTA format only)</font></A></b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="SeqFile">
			<br><br>
			<B>Sequences Type: </B><input type="radio" name="SeqType" value="AminoAcids" onclick="javascript:hide_div_name('CodonsTable')"> Amino Acids &nbsp;&nbsp; <input type="radio" name="SeqType" value="Nucleotides" onclick="javascript:hide_div_name('CodonsTable')">Nucleotides  &nbsp;&nbsp;<input type="radio" name="SeqType" value="Codons" onclick="javascript:show_div_name('CodonsTable')">Codons <BR><BR>
			<div id="MSA_PROGRAM_GUIDANCE">
			<b>Select the MSA algorithm</b>&nbsp;&nbsp;&nbsp;&nbsp;<select
				name="MSA_Program_GUIDANCE" onchange="javascript:toggle_MSA_Options()">
				<option value="MAFFT">MAFFT (default)
<!--				<option value="MAFFT_LINSI">MAFFT-LINSI  -->
				<option value="PRANK">PRANK
				<option value="CLUSTALW">ClustalW
				<option value="MUSCLE">MUSCLE
				<option value="PAGAN">PAGAN 
			</select>
			<br><b><font size="-1" color="red">Warning:</font><font size="-1"color="black">  PRANK is significantly more time consuming.  MAFFT is the fastest.</font></b>
			<br><br>
			</div>
			<div id="MSA_PROGRAM">
			<b>Select the MSA algorithm</b>&nbsp;&nbsp;&nbsp;&nbsp;<select
				name="MSA_Program" onchange="javascript:toggle_MSA_Options()">
				<option value="MAFFT">MAFFT (default)
				<option value="PRANK">PRANK
				<option value="CLUSTALW">ClustalW
			</select>
			<br><b><font size="-1" color="red">Warning:</font><font size="-1"color="black">  PRANK is significantly more time consuming.  MAFFT is the fastest.</font></b>
			<br><br>
			</div>
     		<P align=left><font size=+1><br>Please enter your email address
<!--			<font size=+1><a href="/defaultEmailExplanation.html">-->(Optional)<!--</a></font> -->
			&nbsp;&nbsp;&nbsp;&nbsp;
			<INPUT TYPE="TEXT" NAME="email_add" SIZE=50 bgcolor="yellow"><br>
			<font size=2>Your email address will be used to update you the moment the results are ready. </font>
			<br><br>
			<P align=left><font size=+1><br>Job title (Optional)
			<INPUT TYPE="TEXT" NAME="JOB_TITLE" SIZE=50 bgcolor="yellow"><br>
			<font size=2>Enter a descriptive job title for your GUIDANCE query</font>
			<br><br><br><br>
			<!--div class="g-recaptcha" data-sitekey="6LeNz_8SAAAAAAUGArzhmlPafJJeo5V5RxIIGOcj"></div-->
			<!--noscript>
				 <div style="width: 302px; height: 352px;">
				 <div style="width: 302px; height: 352px; position: relative;">
				 <div style="width: 302px; height: 352px; position: absolute;">
				 <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LeNz_8SAAAAAAUGArzhmlPafJJeo5V5RxIIGOcj"
								  frameborder="0" scrolling="no"
								  style="width: 302px; height:352px; border-style: none;">
				 </iframe>
				 </div>
				 <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                             bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
				 <textarea id="g-recaptcha-response" name="g-recaptcha-response"
								  class="g-recaptcha-response"
								  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                                   margin: 0px; padding: 0px; resize: none;" value="">
                 </textarea>
                 </div>
                 </div>
                 </div>
			</noscript-->	

	<!--img id="captcha" src="http://guidance.tau.ac.il/ver2/securimage/securimage_show.php" alt="CAPTCHA Image" />
	<br>
	
	<input type="text" name="captcha_code" size="10" maxlength="6" />
	<a href="#" onclick="document.getElementById('captcha').src = 'http://guidance.tau.ac.il/ver2/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
	
	<br><br-->
			
	    <img src="/cgi-bin/securityImage.cgi"> (to generate a CAPTCHA image)
<br>		
			
	<label for="CaptchaCode">Retype the characters from the picture:</label>

	<?php // Adding BotDetect Captcha to the page 
	  $SampleCaptcha = new Captcha("SampleCaptcha");
	  $SampleCaptcha->UserInputID = "CaptchaCode";
      $SampleCaptcha->CodeLength = 1;

	  echo $SampleCaptcha->Html(); 
	  
	// if there was a captcha failure and we were redirected here with param
	if (isset($_REQUEST['captchaValid']) && $_REQUEST['captchaValid'] == 'false') 
	{
		// Captcha validation failed, show error message
		//echo "<span class=\"incorrect\">Incorrect code</span>";
		echo '<script language="javascript">';
		echo 'alert("Sorry... please retype the characters from the picture")';
		echo '</script>';
	}
	  
	?>

	<input name="CaptchaCode" id="CaptchaCode" type="text" />
	<br><br><br>
	
<?php 
/*
  if ($_POST) {
    // validate the Captcha to check we're not dealing with a bot
    $isHuman = $SampleCaptcha->Validate();
    
    if (!$isHuman) {
      // TODO: Captcha validation failed, show error message
		echo '<script language="javascript">';
		echo 'alert("index: failed")';
		echo '</script>';
    } else {
      // TODO: Captcha validation passed, perform protected action
	  		echo '<script language="javascript">';
		echo 'alert("index: OK!")';
		echo '</script>';

    } 
  }
*/
?>
	
	
	
			
<input type=submit value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear" id="buttons">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" onclick="LoadExample()">Load  an  example</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-1"><A href="Gallery/output.php">Show Example Results</A></font>
			<br><br><br><br><br>
			<FONT size=+2 color='red'><B><U>Advanced Options</FONT></B></U></p>
			<div id="BOOTSTRAP">
	                        <B>Number of bootstrap repeats</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="Bootstraps" VALUE="100" SIZE=4></br>
			</div>
<!--
			<B>Sensitivity/specificity of column filter</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="FP_Col" SIZE=4 VALUE="0.12"></br>
			(The expected false positive rate based on benchmark studies)<br>
-->
<!--			<BR><BR><B>Removing sequence cutoff</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="SP_SEQ_CUTOFF" SIZE=4 VALUE="0.6"></br>
			<BR><BR><B>Removing columns cutoff</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="SP_COL_CUTOFF" SIZE=4 VALUE="0.93"></br>
-->
			<INPUT TYPE="hidden" NAME="SP_SEQ_CUTOFF" SIZE=4 VALUE="0.6">
			<INPUT TYPE="hidden" NAME="SP_COL_CUTOFF" SIZE=4 VALUE="0.93">
			<br><br>
			<div id="Output_Order">
			<b>Output order</b>:
					<br>&nbsp;<input type="radio" name="outorder" value="as_input">&nbsp;Same as input
					<br>&nbsp;<input type="radio" name="outorder" value="aligned" checked>&nbsp;Aligned<br><br>
			</div>
			<div id="CodonsTable">
				<b>Genetic Code:</b>&nbsp;&nbsp;&nbsp;
	                        <select name="GENCODE"> <!-- Options values are according to BioPerl -->
        	                    <option value=1>Nuclear Standard
                	            <option value=15>Nuclear Blepharisma
                        	    <option value=6>Nuclear Ciliate
	                            <option value=10>Nuclear Euplotid
        	                    <option value=2>Mitochondria Vertebrate
	                            <option value=5>Mitochondria Invertebrate
	                            <option value=3>Mitochondria Yeast
	                            <option value=13>Mitochondria Ascidian
	                            <option value=9>Mitochondria Echinoderm
	                            <option value=14>Mitochondria Flatworm
        	                    <option value=4>Mitochondria Protozoan
                            	</select><br><br>
			</div>

			<br><br>
			<div id="MAFFT_OPTION">
            <b>Advanced MAFFT Options:</b><br>Max-Iterate
			<select name="maxiterate"> 
			<option value="0" selected="selected">0</option> 
			<option value="1">1</option> 
			<option value="2">2</option> 
			<option value="5">5</option> 
			<option value="10">10</option> 
			<option value="20">20</option> 
			<option value="50">50</option> 
			<option value="80">80</option> 
			<option value="100">100</option> 
			<option value="1000">1000(long run)</option>
			</select><br>
			Pairwise alignment method <select name="pair"> 
			<option value="" selected="selected">6mer</option> 
			<option value="localpair">localpair</option> 
			<option value="genafpair">genafpair</option> 
			<option value="globalpair">globalpair</option> 
			</select> 
			</div>
			<br>
			<div id="PRANK_OPTION">
			<b>Advanced PRANK Options:</b><br>
			
			<input type="checkbox" name="F" value="+F" checked> Trust insertions (+F)
            </div>

			</div>
			<br> 
			<br><br><br>
			<input type=submit value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear" id="buttons">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" onclick="LoadExample()">Load  an  example</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-1"><A href="Gallery/output.php">Show Example Results</A></font>
			
			<br>
			<br>
			<br><br>
	</td></table>


	</form>
	</body>
</html>
