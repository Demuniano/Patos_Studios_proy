let nameRolInput = document.getElementById("nameRol");
let errorDisplayed = false;

nameRolInput.addEventListener("blur", function() {
    let nameRolValue = nameRolInput.value.trim();
    
    if (nameRolValue === "" && !errorDisplayed) {
        alert("El campo de nombre de rol no puede estar vacío.");
        nameRolInput.value = "";
        nameRolInput.focus();
        errorDisplayed = true;
    } else if (nameRolValue.length < 4 && !errorDisplayed) {
        alert("El nombre de rol debe tener al menos 4 caracteres.");
        nameRolInput.value = "";
        nameRolInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

