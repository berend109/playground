function changeLoginAndRegisterButton() {
	var login = document.getElementById("login-div")
	var rigister = document.getElementById("register-div")
	var button = document.getElementById("button")
	if (login.style.display === "none") {
		login.style.display = "block"
		rigister.style.display = "none"
		button.innerHTML = "register"
	} else {
		login.style.display = "none"
		rigister.style.display = "block"
		button.innerHTML = "login"
	}
}
