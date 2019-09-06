window.onload=function(){
    let formulario = document.querySelector('.form');
    //console.log(formulario.elements);
    formulario.elements.name.focus()
    formulario.onsubmit = function(evento){
        if(!validaciones()){
            evento.preventDefault();
        }else{
            formulario.submit();
        }
    }
function validaciones(){
        //var email = formulario.elements.email;
        let {name, email,password,password_confirmation,avatar} = formulario.elements;
        //console.log("Estoy en las validaciones");
        if (!validateUsername(name)) return false;
        if (!validateEmail(email)) return false;
  //      if (!validateDoctypeId(doctypeId)) return false;
        if (!validatePassword(password)) return false;
        if (!validatePasswordConfirmation(password, password_confirmation)) return false;
        if (!validateAvatar(avatar)) return false;

        return true;
    }
        function validateUsername(name) {
            let errorUserName = document.getElementById('errorName');
            if (name.value.length < 6){
              errorUserName.innerHTML = "Nombre no puede tener menos de 6 digitos";
              errorUserName.classList.add('alert-danger');
              name.classList.add('alert-danger');
              name.classList.add('is-invalid');
              return false;
            } else{
              errorUserName.innerHTML = "";
              //errorUserName.classList.remove('alert-danger');
              name.classList.remove('alert-danger');
              name.classList.remove('is-invalid');
              name.classList.add('is-valid');
              formulario.elements.email.focus();
              return true;
            }
          }
  function validateEmail(email) {
          let re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
          let error = document.getElementById('errorEmail');

          if (!re.test(email.value)){


            //console.log(errorEmail);
            error.innerHTML= "Debe colocar un email válido";
            //error.addEventListener.add('alert-danger');
            email.classList.add('alert-danger');
            email.classList.add('is-invalid');
          return false
         }else{
          error.innerHTML= "";
          email.classList.remove('alert-danger');
          email.classList.remove('is-invalid');
          email.classList.add('is-valid');          formulario.elements.password.focus();
          return true;
         }
        }
        /*function validateDoctypeId(doctypeId) {
            let errorDoctypeId = document.getElementById('errorDoctypeId');
            if (doctypeId.value == "" ){
              errorDoctypeId.innerHTML = "Debe seleccionar el tipo de documento";
              doctypeId.classList.add('alert-danger');
              doctypeId.classList.add('is-invalid');
              return false;
            } else{
              errorDoctypeId.innerHTML = "";
              errorDoctypeId.classList.remove('alert-danger');
              doctypeId.classList.remove('is-invalid');
              doctypeId.classList.add('is-valid');
              formulario.elements.phone.focus();
              return true;
            }
          }*/
      function validatePassword(password) {
          let re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
          let errorPassword = document.getElementById('errorPassword');

          if (!re.test(password.value)) {
            errorPassword.innerHTML = "Debe especificar una contraseña válida";
            errorPassword.classList.add('alert-danger');
            password.classList.add('is-invalid');
            return false;

          }else{
            errorPassword.innerHTML = "";
            errorPassword.classList.remove('alert-danger');
            password.classList.remove('is-invalid');
            password.classList.add('is-valid');
            formulario.elements.password_confirmation.focus();

            return true;
          }


        }
      function validatePasswordConfirmation(password,repeat){
          //console.log(password.value);
          //console.log(repeat.value);
          errorPasswordRepeat = document.getElementById('errorRePassword');
          if (password.value != repeat.value) {
            errorPasswordRepeat.innerHTML = "Las contraseñas no coinciden";
            errorPasswordRepeat .classList.add('alert-danger');
            repeat.classList.add('is-invalid');
            return false;

          }else{
            errorPasswordRepeat .innerHTML = "";
            errorPasswordRepeat.classList.remove('alert-danger');
            repeat.classList.remove('is-invalid');
            repeat.classList.add('is-valid');
            formulario.elements.avatar.focus();
            return true;
          }
        }
    function validateAvatar(avatar) {
            let errorAvatar = document.getElementById('errorAvatar');
            if (avatar.value.length == 0){
              errorAvatar.innerHTML = "Debe seleccionar una imagen";
              errorAvatar.classList.add('alert-danger');
              avatar.classList.add('is-invalid');
              return false;
            } else{
              errorAvatar.innerHTML = "";
              errorAvatar.classList.remove('alert-danger');
              avatar.classList.remove('is-invalid');
              avatar.classList.add('is-valid');
              formulario.elements.password.focus();
              return true;
            }
          }
}
