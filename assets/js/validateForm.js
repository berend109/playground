function validateForm() {
	let nameLogin = document.forms["loginForm"]["name"].value
	let passLogin = document.forms["loginForm"]["pswd"].value
	let nameRegister = document.forms["registerForm"]["name"].value
	let passRegister = document.forms["registerForm"]["pswd"].value
	if (nameLogin == "" && passLogin == "" && nameRegister == "" && passRegister == "") {
		alert("Name and password must be filled out")
		return false
	}
}