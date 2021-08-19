//
// validate-form.js : created by Josef Sprinzak
// function validateform() is called from Submit in index.php
// added check that captcha text was filled in correctly
//  
function validateform() {

				form = document.Guidance_form
				if ((form.SeqFile.value == "")&&(form.FASTA_txt.value=="")){
					confirm("Please provide sequences as Text or File")
					form.SeqFile.focus()
					return false
				}
				if ((form.SeqFile.value != "")&&(form.FASTA_txt.value!="")){
					confirm("Please provide sequences as Text or File (not both)")
						form.SeqFile.focus()
						return false
				}
				if (form.SeqFile.value != "") {
					found=/^[a-zA-Z0-9._\-]*$/.test(form.SeqFile.value)
					if (!found) {
					confirm("Please use only standard characters in file name")
						form.SeqFile.focus()
						return false
					}
				}
				SeqType="";
				for (i=0;i<document.forms[0].SeqType.length;i++) {
					if (document.forms[0].SeqType[i].checked) {
						SeqType= document.forms[0].SeqType[i].value;
					}
				}
				if (SeqType==""){
					confirm("Please indicate the sequences type: Amino Acids/Nucleotides/Codons")
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
				val = $('#CaptchaCode').valid();
				if (val == 0) {
						confirm("The captcha box 'I'm not a robot' is required to be filled in correctly")
					return false
				}
				return true	
}