/*const btnSwitch = document.querySelector('#switch');


btnSwitch.addEventListener('click',()=>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
    document.body.classList.contains('dark')?
        localStorage.setItem('dark-mode', 'true'):
        localStorage.setItem('dark-mode', 'false');
});

if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
}else{
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}
*/
const btnShowMenu= document.querySelector('#nav_links');
const btnMenu = document.querySelector('.menu');
btnMenu.addEventListener('click',()=>{
    btnShowMenu.classList.toggle('active');
});
/* -------- Funtions --------- */
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function validateEmail(element) {
    var text = document.getElementById(element.id).value;
    var alertEmail = document.getElementById('email-alert');
    alertEmail.style.display = 'block';
    alertEmail.style.color = 'red';
    var re = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i);
    if (!re.test(text)) {
        alertEmail.innerHTML = "Correo invalido";
        return true;
    } else {
        alertEmail.innerHTML = "";
        return false;
    }
}

/*`````login````*/
var btnLogin = document.getElementById('btnLogin'),
    containerlogin = document.getElementById('container-login'),
    login = document.getElementById('login'),
    btncerrarlogin = document.getElementById('btn-cerrar-login');

btnLogin.addEventListener('click', function(){
    containerlogin.classList.add('active');
    login.classList.add('active');
});

btncerrarlogin.addEventListener('click', function(){
    containerlogin.classList.remove('active');
    login.classList.remove('active');
});
