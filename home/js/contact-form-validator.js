function form_validate() {
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var address = document.getElementById('address');

	if (name.value == '') {
		alert("Please enter your name.");
		return false;
		}
		
	if (email.value == '') {
		alert("Please enter your email.");
		return false;
		}	
		
		
	if (address.value == '') {
		alert("Please enter your address.");
		return false;
		}
}
