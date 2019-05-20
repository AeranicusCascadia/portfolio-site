function form_validate() {
	
	var form_alert_field = document.getElementById('contact-form-alert');
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var address = document.getElementById('address');

	if (name.value == '') {
		// alert("Please enter your name.");
		form_alert_field.textContent = "Please enter your name.";
		return false;
		}
		
	if (email.value == '') {
		// alert("Please enter your email
		form_alert_field.textContent = "Please enter your email address.";
		return false;
		}	
		
		
	if (address.value == '') {
		// alert("Please enter your address.");
		form_alert_field.textContent = "Please enter your physical address.";
		return false;
		}
}
