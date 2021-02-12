function validarCampoVacio(idCampo){
    var campo = document.getElementById(idCampo);
    if(campo.value==null || campo.value.trim().length==0){
        return true;
    }else{
        return false;
    }
}

function validarCodUsuario(){
    var codUsuarioCorrecto = true;
    var codUsuario = document.getElementById('CodUsuario');
    var errorUsuario = document.getElementById('errorCodUsuario');
    errorUsuario.innerHTML = "";

    if(validarCampoVacio('CodUsuario')){
        errorUsuario.innerHTML = "Campo vacio";
        codUsuarioCorrecto = false;
    }else if(codUsuario.value.length<3){
        errorUsuario.innerHTML = "El tamaño mínimo es de 3 caracteres";
        codUsuarioCorrecto = false;
    }else if(codUsuario.value.length>8){
        errorUsuario.innerHTML = "El tamaño máximo es de 8 caracteres";
        codUsuarioCorrecto = false;
    }

    return codUsuarioCorrecto;
}

function validarDescUsuario(){
    var descUsuarioCorrecto = true;
    var descUsuario = document.getElementById('DescUsuario');
    var errorDescUsuario = document.getElementById('errorDescUsuario');
    errorDescUsuario.innerHTML = "";

    if(validarCampoVacio('DescUsuario')){
        errorDescUsuario.innerHTML = "Campo vacio";
        descUsuarioCorrecto = false;
    }else if(codUsuario.value.length<3){
        errorDescUsuario.innerHTML = "El tamaño mínimo es de 3 caracteres";
        descUsuarioCorrecto = false;
    }else if(codUsuario.value.length>255){
        errorDescUsuario.innerHTML = "El tamaño máximo es de 255 caracteres";
        descUsuarioCorrecto = false;
    }

    return descUsuarioCorrecto;
}

function validarPasswordIguales(){
    var passwordCorrecto = true;
    var password = document.getElementById('Password');
    var passwordRepetida = document.getElementById('PasswordConfirmacion');
    var errorPassword = document.getElementById('errorPassword');
    var errorPasswordConfirmacion = document.getElementById('errorPasswordConfirmacion');
    errorPassword.innerHTML = "";
    errorPasswordConfirmacion.innerHTML = "";

    if(password.value!="" && passwordRepetida!=""){
        if(password.value!=passwordRepetida.value){
            errorPassword.innerHTML = "Las contrasaeñas deben ser iguales";
            passwordCorrecto = false;
        }
    }
    return passwordCorrecto;
}

function validarPassword(idPassword, idError){
    var passwordCorrecto = true;
    var password = document.getElementById(idPassword);
    var errorPassword = document.getElementById(idError);
    errorPassword.innerHTML = "";

    if(validarCampoVacio(idPassword)){
        errorPassword.innerHTML = "Campo vacio";
        passwordCorrecto = false;
    }else if(password.value.length<1){
        errorpassword.innerHTML = "El tamaño mínimo es de 1 caracteres";
        passwordCorrecto = false;
    }else if(password.value.length>8){
        errorPassword.innerHTML = "El tamaño máximo es de 8 caracteres";
        passwordCorrecto = false;
    }else if(!validarPasswordIguales()){
        passwordCorrecto = false;
    }

    // if(!validarPasswordIguales()){
    //     passwordCorrecto = false;
    // }

    return passwordCorrecto;
}

function validarFormulario(){
    var formularioCorrecto = true;

    if(!validarCodUsuario() || !validarDescUsuario() || !validarPassword('Password') || !validarPassword('PasswordConfirmacion')){
        formularioCorrecto = false;
    }

    return formularioCorrecto;
}