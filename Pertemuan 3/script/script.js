function ValidatePassword() {
    var password = document.getElementById("fpassword").value;
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    var passwordWarning = document.getElementById("passwordWarning");

    if (!regex.test(password)) {
        passwordWarning.value = "Password must contain at least 8 character, both lowercase and uppercase letter, and at least one number."
    }
}