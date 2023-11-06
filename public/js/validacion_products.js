let nameInput = document.getElementById("name");
let quantityInput = document.getElementById("quantity");
let priceInput = document.getElementById("price");
let descriptionInput = document.getElementById("description");
let flavorInput = document.getElementById("flavor");
let errorDisplayed = false;

// Crea un elemento div para los mensajes de validación de quantity
let quantityErrorMessage = document.createElement("div");
quantityErrorMessage.style.color = "red";
quantityInput.parentNode.appendChild(quantityErrorMessage);

nameInput.addEventListener("blur", function() {
    let nameValue = nameInput.value.trim();

    if (nameValue === "" && !errorDisplayed) {
        alert("El campo de nombre no puede estar vacío.");
        nameInput.focus();
        errorDisplayed = true;
    } else if (nameValue.length < 4 && !errorDisplayed) {
        alert("El nombre debe tener al menos 4 caracteres.");
        nameInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

quantityInput.addEventListener("blur", function() {
    let quantityValue = quantityInput.value.trim();
    
    if (quantityValue === "" && !errorDisplayed) {
        alert("El campo de cantidad no puede estar vacío.");
        quantityInput.focus();
        errorDisplayed = true;
    } else if (!Number.isInteger(Number(quantityValue)) && !errorDisplayed) {
        alert("Debes ingresar un número entero en el campo de cantidad.");
        quantityInput.focus();
        errorDisplayed = true;
    } else {
        quantityErrorMessage.textContent = ""; // Borra el mensaje de error si pasa la validación
        errorDisplayed = false;
    }
});

priceInput.addEventListener("blur", function() {
    let priceValue = priceInput.value.trim();
    
    if (priceValue === "" && !errorDisplayed) {
        alert("El campo de precio no puede estar vacío.");
        priceInput.focus();
        errorDisplayed = true;
    } else if (isNaN(priceValue) && !errorDisplayed) {
        alert("Debes ingresar un número válido en el campo de precio.");
        priceInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

descriptionInput.addEventListener("blur", function() {
    let descriptionValue = descriptionInput.value.trim();
    
    if (descriptionValue === "" && !errorDisplayed) {
        alert("El campo de descripción no puede estar vacío.");
        descriptionInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

flavorInput.addEventListener("blur", function() {
    let flavorValue = flavorInput.value.trim();
    
    if (flavorValue === "" && !errorDisplayed) {
        alert("El campo de sabor no puede estar vacío.");
        flavorInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});




