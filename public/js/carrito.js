window.onload = function(){

    var quantity = document.getElementById("quantity")
    var error = document.getElementById("errorQuantity")
    var subtotal = document.getElementById('subtotal')
    var total = document.getElementById('total')
    //console.log(quantity.value);
    //console.log(total.value);
    //console.log(quantity.value);
    if (quantity.value === "" || quantity.value === null)
    {

        error.innerHTML = "Por favor, seleccione la cantidad deseada"
        error.setAttribute("class","invalid-feedback" )
        quantity.setAttribute("class", "form-control is-invalid")
        quantity.addEventListener("change", change)
        return false;
    }
    //console.log(total.innerText);
    //console.log(subtotal.value);
    //console.log(quantity);
    totalOperacion = parseInt(subtotal.innerHTML) * quantity.value
    total.innerText = totalOperacion;
    console.log(total.innerText);

        function change(){
        error.innerHTML = ""
        error.setAttribute("class","" )
        name.setAttribute("class", "form-control")

        return
       }
}
