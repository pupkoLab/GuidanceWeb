$(document).ready(function() {
  $("#Guidance_form").validate({
    rules: {
      // Captcha code is a required input, and its value is validated remotely
      // the remote validation Url is exposed through the BotDetect client-side API
      CaptchaCode: { required: true, remote: $("#CaptchaCode").get(0).Captcha.ValidationUrl }
	//CaptchaCode: { required: true, 
	//			   remote: {url: 'botdetect.php'}
	//			   }
	  //CaptchaCode: { required: true}
	  //CaptchaCode: { required: true, remote: //document.getElementById('CaptchaCode').get(0).Captcha.ValidationUrl }
    },
    messages: {
      // error messages for Captcha code validation 
      CaptchaCode: {
        required: "The Captcha code is required",
        remote: "The Captcha code must be retyped correctly"
      }
    },
	 // the Captcha input must only be validated when the whole code string is
    // typed in, not after each individual character (onkeyup must be false)
    onkeyup: false,
    // validate user input when the element loses focus
    onfocusout: function(element) { $(element).valid(); }
  });
});

