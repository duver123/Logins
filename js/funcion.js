// Validación 
// const email = document.getElementById("email")
// const pass = document.getElementById("password")
// const form = document.getElementById("form")
// const parrafo = document.getElementById("warnings")

// form.addEventListener("submit", e =>{
//     e.preventDefault()
//      let warnings = ""
//      let entrar = false
//     let regexEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
//     parrafo.innerHTML = "";
    
//     if(regexEmail.test(email.value)){
//         warnings += 'El email no es válido';
//         entrar = true
//     }
//     if(pass.value.length <8){
//         warnings += 'La contraseña no es válida';
//         entrar = true
//     }
//     if(entrar){
//         parrafo.innerHTML = warnings
//     }else{
//         parrafo.innerHTML = "Enviado"
//     }
// });





function mostrarContrasena(){
    var cambio = document.getElementById("password");
    if(cambio.type == "password"){
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
} 

