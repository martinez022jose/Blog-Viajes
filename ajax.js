var nombre = document.getElementById('nombre').value;
var apellido = document.getElementById('apellido').value;
var email = document.getElementById('email').value;
var mensaje = document.getElementById('mensaje').value;
var botonEnviarFormulario = document.getElementById('buttonEnviar');
var resFormulario = document.querySelector('section .form .cajaFormulario .formulario .resFormulario');


botonEnviarFormulario.addEventListener('click',validarEnvioMail);

function validarEnvioMail(){
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","validacionEnvioMail.php",true);
    var informacionTotal = "nombre"+nombre+"&apellido"+apellido+"&email"+email+"&mensaje"+mensaje;
    xhttp.onreadystatechange = function(){
        if(xhttp.status == 200 && xhttp.readyState == 4){
            var mensaje = xhttp.responseText;
            resFormulario.innerHTML += mensaje;

        }

    }
    xhttp.send(informacionTotal);

    
}