function swapLoginRegister() {
	var login = document.getElementById("login-div")
	var register = document.getElementById("register-div")
	var button = document.getElementById("button")
	if (login.style.display === "none") {
		login.style.display = "block"
		register.style.display = "none"
		button.innerHTML = "register"
	} else {
		login.style.display = "none"
		register.style.display = "block"
		button.innerHTML = "login"
	}
}
