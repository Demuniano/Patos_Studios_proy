let userInput = document.getElementById("user");
let productInput = document.getElementById("product");
let dateInput = document.getElementById("date");
let descriptionInput = document.getElementById("description");
let qualificationInput = document.getElementById("qualification");
let errorDisplayed = false;

userInput.addEventListener("blur", function() {
    let userValue = userInput.value.trim();

    if (userValue === "" && !errorDisplayed) {
        alert("El campo de usuario no puede estar vacío.");
        userInput.value = "";
        userInput.focus();
        errorDisplayed = true
    } else {
        errorDisplayed = false;
    }
});

productInput.addEventListener("blur", function() {
    let productValue = productInput.value.trim();
    
    if (productValue === "" && !errorDisplayed) {
        alert("El campo de producto no puede estar vacío.");
        productInput.value = "";
        productInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

dateInput.addEventListener("blur", function() {
    let dateValue = dateInput.value.trim();
    
    if (dateValue === "" && !errorDisplayed) {
        alert("El campo de fecha no puede estar vacío.");
        dateInput.value = "";
        dateInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

descriptionInput.addEventListener("blur", function() {
    let descriptionValue = descriptionInput.value.trim();
    
    if (descriptionValue === "" && !errorDisplayed) {
        alert("El campo de descripción no puede estar vacío.");
        descriptionInput.value = "";
        descriptionInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

qualificationInput.addEventListener("blur", function() {
    let qualificationValue = qualificationInput.value.trim();
    
    if (qualificationValue === "" && !errorDisplayed) {
        alert("El campo de calificación no puede estar vacío.");
        qualificationInput.value = "";
        qualificationInput.focus();
        errorDisplayed = true;
    } else if (isNaN(qualificationValue) && !errorDisplayed) {
        alert("La calificación debe ser un número válido.");
        qualificationInput.value = "";
        qualificationInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});
