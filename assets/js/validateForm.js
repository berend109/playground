function validateForm() {
	let name = document.forms["loginForm"]["name"].value
	let pass = document.forms["loginForm"]["pswd"].value
	if (name == "" && pass == "") {
		alert("Name and password must be filled out")
		return false
	}
}