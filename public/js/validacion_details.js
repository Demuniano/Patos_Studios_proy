let idorderInput = document.getElementById("idorder");
let idproductInput = document.getElementById("idproduct");
let cantidadInput = document.getElementById("cantidad");
let errorDisplayed = false;

idorderInput.addEventListener("blur", function() {
    let idorderValue = idorderInput.value.trim();

    if (idorderValue === "" && !errorDisplayed) {
        alert("El campo de ID de orden no puede estar vacío.");
        idorderInput.value = "";
        idorderInput.focus();
        errorDisplayed = true;
    } else if (isNaN(idorderValue) && !errorDisplayed) {
        alert("El ID de orden debe ser un número válido.");
        idorderInput.value = "";
        idorderInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

idproductInput.addEventListener("blur", function() {
    let idproductValue = idproductInput.value.trim();
    
    if (idproductValue === "" && !errorDisplayed) {
        alert("El campo de ID de producto no puede estar vacío.");
        idproductInput.value = "";
        idproductInput.focus();
        errorDisplayed = true;
    } else if (isNaN(idproductValue) && !errorDisplayed) {
        alert("El ID de producto debe ser un número válido.");
        idproductInput.value = "";
        idproductInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

cantidadInput.addEventListener("blur", function() {
    let cantidadValue = cantidadInput.value.trim();
    
    if (cantidadValue === "" && !errorDisplayed) {
        alert("El campo de cantidad no puede estar vacío.");
        cantidadInput.value = "";
        cantidadInput.focus();
        errorDisplayed = true;
    } else if (!Number.isInteger(Number(cantidadValue)) && !errorDisplayed) {
        alert("La cantidad debe ser un número entero.");
        cantidadInput.value = "";
        cantidadInput.focus();
        errorDisplayed = true;
    } else {
        errorDisplayed = false;
    }
});

