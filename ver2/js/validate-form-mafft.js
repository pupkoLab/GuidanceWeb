//
// validate-form.js : created by Josef Sprinzak
// function validateform() is called from Submit in index.php
// added check that captcha text was filled in correctly
//  
function validateform_mafft() {

				form = document.Guidance_form
				if (form.FASTA_txt.value==""){
					confirm("Please provide sequences as Text")
					return false
				}
				if (form.Bootstraps.value == ""){
                                        confirm("number of bootstrap repeats was set to default value (100)")
                                        form.Bootstraps.focus()
					form.Bootstraps.value=100
                }
				val = $('#CaptchaCode').valid()
				if (val == 0) {
						confirm("The captcha box 'I'm not a robot' is required to be filled in correctly")
					return false
				}
				return true	
}