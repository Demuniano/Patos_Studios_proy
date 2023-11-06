let nameInput = document.getElementById("name");
let RolnameInput = document.getElementById("Rolname");
let emailFieldInput = document.getElementById("emailField");
let AdressFieldInput = document.getElementById("AdressField");
let passwordFieldInput = document.getElementById("passwordField");
let errorDisplayed = false;

nameInput.addEventListener("blur", function() {
    let nameValue = nameInput.value.trim();

    if (nameValue === "" && !errorDisplayed) {
        alert("El campo de nombre no puede estar vacío.");
        nameInput.value = "";
        nameInput.focus();
        errorDisplayed = true;
    } else if (nameValue.length < 4 && !errorDisplayed) {
        alert("El nombre debe tener al menos 4 caracteres.");
        nameInput.value = "";
        nameInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

RolnameInput.addEventListener("blur", function() {
    let RolnameValue = RolnameInput.value.trim();
    
    if (RolnameValue === "" && !errorDisplayed) {
        alert("El campo de nombre de rol no puede estar vacío.");
        RolnameInput.value = "";
        RolnameInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

emailFieldInput.addEventListener("blur", function() {
    let emailFieldValue = emailFieldInput.value.trim();
    
    if (emailFieldValue === "" && !errorDisplayed) {
        alert("El campo de correo electrónico no puede estar vacío.");
        emailFieldInput.value = "";
        emailFieldInput.focus();
        errorDisplayed = true;
    } else if (!isValidEmail(emailFieldValue) && !errorDisplayed) {
        alert("Debes ingresar un correo electrónico válido.");
        emailFieldInput.value = "";
        emailFieldInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

AdressFieldInput.addEventListener("blur", function() {
    let AdressFieldValue = AdressFieldInput.value.trim();
    
    if (AdressFieldValue === "" && !errorDisplayed) {
        alert("El campo de dirección no puede estar vacío.");
        AdressFieldInput.value = "";
        AdressFieldInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

passwordFieldInput.addEventListener("blur", function() {
    let passwordFieldValue = passwordFieldInput.value.trim();
    
    if (passwordFieldValue === "" && !errorDisplayed) {
        alert("El campo de contraseña no puede estar vacío.");
        passwordFieldInput.value = "";
        passwordFieldInput.focus();
        errorDisplayed = true;
    } else if (passwordFieldValue.length < 6 && !errorDisplayed) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        passwordFieldInput.value = "";
        passwordFieldInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

// Función para validar el formato de correo electrónico
function isValidEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zAZ0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email);
}



