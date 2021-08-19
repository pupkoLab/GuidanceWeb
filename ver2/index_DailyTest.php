<?
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text

?>

		<link rel="stylesheet" type="text/css" href="guidance.css" />
		<!--script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- recaptcha -->
        <script type="text/javascript" src="javascript_functions.js"></script>
		<script type="text/javascript">
			function LoadExample(){
			   form = document.Guidance_form
			   form.reset();
			   form.FASTA_txt.value = ">NC_001802.HXB2\nMQPIPIVAIVALVVAIIIAIVVWSIVIIEYRKILRQRKIDRLIDRLIERAEDSGNESEGEISALVEMGVEMGHHAPWDVDDL\n>EF637049.B\nMQSLQIVAIVALVVTAIIAIVVWSIVLIEYRKLLRQRKIDRLIDRIRERAEDSGNESEGDQEELAGLVERGHLAPWDVDDL\n>EF514700.B\nMQPLEILAIVALVVAIILAIVVWTIVFIEYKKILRQRKIDRLIDRIAERAEDSGNESEGDQEELSALVDMGHDAPWVVVDQ\n>DQ056417.C\nMLESIDYRLGVAALLLALIIAIIVWIIAYLEYRKLLRQRRIDKLIKRIRERAEDSGNESEGDIEELSTMVDVEHLRLLDVNNL\n>AY463217.C\nMVDLLAGVDYRVGVGALIIALIIAIIVWIWVYIEYRKLLRQRKIDWLIKRLREREEDSGNESEGDTEELATMVDMGHLRLLDDNNV\n>DQ011165.C\nMLNFLAGVDYRIGVGALIVGLIIAIVVWIIVYLEYRKLVKQRKIDWLIERIRERAEDSGNESEGDTEELATMVDMGHLRLLDAYDL\n>AB254142.C\nMINFAARVDYRVGVAAFTIALIIAIVVWIIVYLELVRQRKIDQLIIRIREREEDSGNESEGDIEELSTMVDMGQLRLLDGNGL\n>AY901969.C\nMVNLLEKVNLFEKVDYRLGVGALLIALVIAIIVWTIAYIEYRKLVRQRKIDWLVKRIRERAEDSGNESDGDTEELSTMVDLGHLRLLDVAEL\n>EU110088.A1\nMNQLQILAIXGLVVALILAIVVWTIVGIEYRKLLRQRRIDRLIKRISERAEDSGNESDGDTEELSQLVEMGNYNLGFDDNL\n>AB253428.A1\nMQLLEICAVVGLVVALIIAIVVWTIVGIEYKKLLKQRKIDRLVDRIRERAEDSGNESDGDREELSLLVDMGDYDLGDDNNL\n>AF457052.A1\nMLSALEICAIAGLVIALIIAIVVWTIVGIEYRRLLKQRKIDRLIERIRERAEDSGNESDGDTEELAALIEMGNYDLGDANDL\n>AF077336.F1\nMSYLLAIGIAALIVALIIAIVVWTIVYIEYKKLVRQRKINKLYKRIRERAEDSGNESEGDAEELAALGEMGPFIPGDINNL\n>DQ168575.G\nMKSLEISAIVGLIVAFIAAIVVWTIVLIEYRKIRKQKRIDKILDRIRERAEDSGNESEGDTEELATLVDMVDFEPWVGDNL\n>AY795907.D\nMQTLEILSIVALVIAAIIAIIVWTIVYIEYRKIRRQRKIDQLIDRIRERAEDSGNESEGDEEELSTLMEMGHAAPWNVADDL\n>EF394358.PTS\nMVKIVVGSVLTNVIGAFCILLILIGGGLLIIAFVRRELERERQHQRVIERLVRRLSIDSGIDEDEELNWNNFDPHNFNPRDWI\n>AF103818.PTT\nMLNWFEIGLIALGIEGILVVIIWGLVARLWRQIKIKENTQQEIQNLLERIRIREEDSGNESDGEEEETLAKLLSSLELDNPRIV\n>DQ373066.PTT\nMQLEIVLIILFIALMLVAIFAWIAAYKEYKKLQQVRRIERLQDRIRSRAEDSGNESDGDEILLVEELMQVHQHQVNPDWMDRILFW\n>DQ373063.PTT\nMDIVQQVGLLVVLIIELVIVIVIWVKVYKLCKEDRRQKKIDRLIARIRERAEDSGNESDGDTEELQDLITEGDNLMHIGIRDNRNN\n>DQ373065.PTT\nMLLLIKLGFIGLAIETLIVIVVWAIVYRIYREVKVEEKISQLRQRIRDRAEDSGNESDGDAEELANLLPPDRIDQDNWV\n>EF535994.PTT\nMEIFIILGLIGIVIELVIAIVVWLKAYECYKALKRQERRDQLIDRIRERAEDSGNESDGDTEELEAILIPEDRHVLVAIRGY\n>DQ373064.PTT\nMDLIELGLIGLVIELIIVIVVWLKAYQLYKENIRQKAINKLIERIRERGEDSGNESEGDMDELHAILRSGDPELVLIDN\n>AY169968.PTT\nMILIALGCLAIALILLNIFIWRNLWRLCKQNKLEVEIENLALRLTERAEDSGNESDGGEEEKLQRLLHDHDNMHGFANPLFDI\n>EF535993.PTT\nMLTWEQIGLIALGIEGIIATVVWGIAFITWRRRKIEEDRAQKIIDLLERIRARQDDSGNESDGEDQRQLMAYGFDNPMFDW\n>U42720.SIVCPXANT\nMTNIFEYAFLAFSIVLWIICIPILYKLYKIYKQQQIDNKRNQRIIEVLSRRLSIDSAIEEDEEADTYYLGSGFANPVYREGDE\n>AF382828.SIVCPXGAB2\nMLSMWVAIGLIGIGTLLVINIVVWGIVGISVYKRWKRHKEEQRIIDLIIKITERAEDSGNESDGEDKETLATLLHNNGFDNPMFEDRI\n>DQ017383.N\nMLELGFIAFGVAIIIAVIIWVLLYKEYKEIKLQEKIEKIRQRIRDRAKESGKESDGDAEWLGDKESVGDDEWLAILLSPDKLDNWV\n>AY169807.O\nMLHRDLLLLIIISALLLTNIILWMFVLRKYLEIKKQERREREILERLRXIREIRDDSDYESNEEEEQEVRDHLVHTFGFANPMFEI\n>AY169811.O\nMHHRDLLTLIAVSALLFINIILWIYVLRKYLEQRKQDRREREILERLRRIXEIGDDSDYESNEEEEQEVMDLVHNHGFDNPMFEP\n>AY169804.O\nMHQRDLLILIAVSILCLICILVWTFNLRKYLEHRKQDKREREILERLRRVREIRDDSDYESBGEEEQEVMDLIHSHGFANPLFEL\n>AJ302646.O\nMHHRDLLALITTSALLLTNVVLWTFILRQYLKQKKQDKREREILERLRRIRQIEDDSDYESDGTEEQEVRDLVHSYGFDNPMFEL\n>AY169803.O\nMHYRDLSTLIIVSALLLINVXLWMFILRXYLEHKRQERREREILERLRRIREIKDDSDYESNGEEEQEVMDLVHSHGFDNPMFEL\n>AY169810.O\nMNYKELLSLIVVSVLLLAAIVIWMFILKKYLEQKEQDRRERELLKRIERLXEXRDDSDYESNGDEEQEVMHLVHTHGFANPMFEL\n>AY169815.O\nMQHKDLLILIITSALLLINVILWLFVLKQCLEQKKQTKREREIIRRLRRIREIEDDSDYESNGEEEQTVRDLIHSHGFDNPMFEL\n>AY169809.O\nMQYKGLLLIIIALLLINVXVWMFNLRKYLEQKKQERREREVINRLRRIREVKDDSDYESNGEEEQEVMELVHSHGFDNPMFEL\n>AY169806.O\nMYKDQIILIIIFCVVFLIAACIWLFILKTYLEQKKQDRREKELLRRLQRIIEIRDDSDYESNGEEEQEVMDLVHEHGFVNPMFEL\n>FJ424864.GOR\nMHPRDIIVIIIGITLLAVTVIIWLKIFALYLRDRRERRFFDRLERLLSNKEDEGYESNEEEAAELMEMGNELGFDFNLH\n>AJ549283.CERCOPITHECUS\nMNTYWIAAISVWCVIVLLAPCTLYLLYQSYKEHKRVSRFEQDFQRLVQXYQEXDSGYEDEDEDHNSFDNPLFDDGDPDQWV\n>AY340701.CERCOPITHECUS\nMNYWWSLVAITYSLILIALPVAAWAWWRYYKITKRFKRIDQEIQRLIQIHERRRHDSGVDTESESEQHEETHGFVNPVFNDDFGEWV\n>AF468658.CERCOPITHECUS\nMSAAALWWWGAAVITFIYFCLAIFALYLAWDKWIKGKPKIPVAVIRLVEDDEESGIFEDASSEPNAYGFANPGFEV\n>AJ580407.CERCOPITHECUS\nMLKIKLGPIEYVCLVFAVVITWIAAIGVGYLAYRAYKSYREELRYIRLRLWSIDSGYESSQEDP\n>AY340700.CERCOPITHECUS\nMNYWYLAAVIVTGIYFVIAIFAFVLAYQRWCKPKKVEVSVIRLLEEGDGDSGIFEDAEDDMAESEHHAFANPAFEQ\n>AF468659.CERCOPITHECUS\nMHPAAVWWWGAAIITFIYLCVALLALYLAWDKWVKGKPKPTQVAVIRLIEDEEDSGIYDDASSELTGFNGFANPGFEV\n>EF070331.SIVMUS01CM2500\nMNWWWFAAAVVTAIYFVIALVAFVLAYQRWCQPQKGQVEVNVIRLLEEGDTDSGIFEDAEDGSDDQRHGFLNPAFEL\n>EF070329.SIVMUS01CM1246\nMHYWYLGAAIVTAIYLVIALVAFILAYQRWCQPKPPIEVNVLRLLEEGDSDSGIFEDACDGEDEDSHRAFANPSFEP\n";
			   form.SeqType[0].checked=true;
			   form.Program[0].checked=true;

			   form.Program.selectedIndex = 0;
			   toggle_Algorithm_Options();
			   form.MSA_Program.value = "MAFFT";
		           form.MSA_Program.selectedIndex = 0;
			   toggle_MSA_Options();
			   return true;
			}
			function validate() {

				form = document.Guidance_form
				if ((form.SeqFile.value == "")&&(form.FASTA_txt.value=="")){
					alert("Please provide sequences as Text or File")
					form.SeqFile.focus()
					return false
				}
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
								
				return true	
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
		      action="cgi-post.php"
		      method="post"
		      ENCTYPE="multipart/form-data"
		      onsubmit="return validate()">

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
			<textarea name="FASTA_txt" rows=8 cols=70 id="FASTA_txt">>NC_001802.HXB2
MQPIPIVAIVALVVAIIIAIVVWSIVIIEYRKILRQRKIDRLIDRLIERAEDSGNESEGEISALVEMGVEMGHHAPWDVDDL
>EF637049.B
MQSLQIVAIVALVVTAIIAIVVWSIVLIEYRKLLRQRKIDRLIDRIRERAEDSGNESEGDQEELAGLVERGHLAPWDVDDL
>EF514700.B
MQPLEILAIVALVVAIILAIVVWTIVFIEYKKILRQRKIDRLIDRIAERAEDSGNESEGDQEELSALVDMGHDAPWVVVDQ
>DQ056417.C
MLESIDYRLGVAALLLALIIAIIVWIIAYLEYRKLLRQRRIDKLIKRIRERAEDSGNESEGDIEELSTMVDVEHLRLLDVNNL
>AY463217.C
MVDLLAGVDYRVGVGALIIALIIAIIVWIWVYIEYRKLLRQRKIDWLIKRLREREEDSGNESEGDTEELATMVDMGHLRLLDDNNV
>DQ011165.C
MLNFLAGVDYRIGVGALIVGLIIAIVVWIIVYLEYRKLVKQRKIDWLIERIRERAEDSGNESEGDTEELATMVDMGHLRLLDAYDL
>AB254142.C
MINFAARVDYRVGVAAFTIALIIAIVVWIIVYLELVRQRKIDQLIIRIREREEDSGNESEGDIEELSTMVDMGQLRLLDGNGL
>AY901969.C
MVNLLEKVNLFEKVDYRLGVGALLIALVIAIIVWTIAYIEYRKLVRQRKIDWLVKRIRERAEDSGNESDGDTEELSTMVDLGHLRLLDVAEL
>EU110088.A1
MNQLQILAIXGLVVALILAIVVWTIVGIEYRKLLRQRRIDRLIKRISERAEDSGNESDGDTEELSQLVEMGNYNLGFDDNL
>AB253428.A1
MQLLEICAVVGLVVALIIAIVVWTIVGIEYKKLLKQRKIDRLVDRIRERAEDSGNESDGDREELSLLVDMGDYDLGDDNNL
>AF457052.A1
MLSALEICAIAGLVIALIIAIVVWTIVGIEYRRLLKQRKIDRLIERIRERAEDSGNESDGDTEELAALIEMGNYDLGDANDL
>AF077336.F1
MSYLLAIGIAALIVALIIAIVVWTIVYIEYKKLVRQRKINKLYKRIRERAEDSGNESEGDAEELAALGEMGPFIPGDINNL
>DQ168575.G
MKSLEISAIVGLIVAFIAAIVVWTIVLIEYRKIRKQKRIDKILDRIRERAEDSGNESEGDTEELATLVDMVDFEPWVGDNL
>AY795907.D
MQTLEILSIVALVIAAIIAIIVWTIVYIEYRKIRRQRKIDQLIDRIRERAEDSGNESEGDEEELSTLMEMGHAAPWNVADDL

			</textarea><br>OR<br>
			<b>Upload your sequences file <A href="http://en.wikipedia.org/wiki/FASTA_format"><font size=-1>(FASTA format only)</font></A></b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="SeqFile">
			<br><br>
			<B>Sequences Type: </B><input type="radio" name="SeqType" value="AminoAcids" onclick="javascript:hide_div_name('CodonsTable')" checked> Amino Acids &nbsp;&nbsp; <input type="radio" name="SeqType" value="Nucleotides" onclick="javascript:hide_div_name('CodonsTable')">Nucleotides  &nbsp;&nbsp;<input type="radio" name="SeqType" value="Codons" onclick="javascript:show_div_name('CodonsTable')">Codons <BR><BR>
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
			<INPUT TYPE="TEXT" NAME="email_add" SIZE=50 bgcolor="yellow" value="josefspr@gmail.com"><br>
			<font size=2>Your email address will be used to update you the moment the results are ready. </font>
			<br><br>
			<P align=left><font size=+1><br>Job title (Optional)
			<INPUT TYPE="TEXT" NAME="JOB_TITLE" SIZE=50 bgcolor="yellow" value="daily_test"><br>
			<font size=2>Enter a descriptive job title for your GUIDANCE query</font>
			<br><br><br><br>
			<!--div class="g-recaptcha" data-sitekey="6LeNz_8SAAAAAAUGArzhmlPafJJeo5V5RxIIGOcj"></div-->
			<noscript>
				 <div style="width: 302px; height: 352px;">
				 <div style="width: 302px; height: 352px; position: relative;">
				 <div style="width: 302px; height: 352px; position: absolute;">
                 </div>
                 </div>
                 </div>
			</noscript>					  
<input type=submit value="Submit" autofocus>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear" id="buttons">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" onclick="LoadExample()">Load  an  example</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="-1"><A href="Gallery/output.php">Show Example Results</A></font>
			<br><br><br><br><br>
			<FONT size=+2 color='red'><B><U>Advanced Options</FONT></B></U></p>
			<div id="BOOTSTRAP">
	                        <B>Number of bootstrap repeats</B>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE="TEXT" NAME="Bootstraps" VALUE="100" SIZE=4></br>
			</div>

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
