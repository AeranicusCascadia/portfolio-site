function form_validate() {
	
	var form_alert_field = document.getElementById('contact-form-alert');
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var contact_message = document.getElementById('contact_message');
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
		
	if (contact_message.value == '') {
		// alert("Please enter a message.");
		form_alert_field.textContent = "Please enter a message.";
		return false;
		}
		
	if (address.value != '') {
		alert("Not so fast, scammer!");
		return false;
	}	
}
