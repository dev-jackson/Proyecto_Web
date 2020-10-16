function AddAtributos(elemento,attrObj){
	for(let attr in attrObj){
		if(attrObj.hasOwnProperty(attr)) elemento.setAttribute(attr,attrObj[attr]);
	}
};

function crearElementoPersonalizado(elemento,atributos,hijos){
	let elementoPersonalizado=document.createElement(elemento);
	if(hijos !== undefined) hijos.forEach(el=>{
		if(el.nodeType === 1 || el.nodeType === 114) elementoPersonalizado.appendChild(el);
	else elementoPersonalizado.innerHTML +=el;
	});
	AddAtributos(elementoPersonalizado,atributos);
	return elementoPersonalizado;
};

function validar_Registro(){
    const nombre = document.getElementById("name1");
    const edad = document.getElementById("edad1");
    const email = document.getElementById("Email1");
    const pwd = document.getElementById("password1");
    let validacion=[/^[A-Z]+$/i,/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i];
    if(validacion.test(email)){
        fetch("index.php?c=user&a=registerUser",{
            method: "POST",
            cache: "no-cache",
            body:  JSON.stringify({
                "nombre": nombre.value,
                "edad": edad.value,
                "email": email.value,
                "password": pwd.value
            })
        }).then(res => {
            console.log(res.json());
        })
        .catch(err => console.log("Error:", err))
        .then(response => console.log("Success:",response));
    }
    let datos=document.querySelectorAll(".portafolio-container .form-group input");
    let contraseñas=document.querySelectorAll(".portafolio-container .form-group-check input");
    for (let index = 0; index < datos.length; index++) {
        if (datos[index].value == null || datos[index].value.length == 0 || !validacion[index].test(datos[index].value) ) {
            alert("Debe llenar todos los campos correctamente");
            datos[index].focus();
            return false;
        }
    }
    if(contraseñas[contraseñas.length-1].value !== contraseñas[contraseñas.length-2].value) {
        alert("Contraseñas no coinciden");
        alert(contraseñas[contraseñas.length-1].value , contraseñas[contraseñas.length-2].value);
        return false;
    }
    if (contraseñas[contraseñas.length-1].value.length <8 || !/\d{1}/.test(contraseñas[contraseñas.length-1].value) || !/[A-Z]{1}/.test(contraseñas[contraseñas.length-1].value) ) {
        alert("Las contraseñas deben tener una longintud minima de 8 caracteres y contener minimo un numero y una letra en mayuscula");
        return false;
    }
    alert("Registro Exitoso");
}

function validar_Empleo(){
    let datos=document.querySelectorAll(".portafolio-container input");
    let validacion=[/^[A-Z]+$/i,/^[A-Z]+$/i,/^[-\w.%+]{1,64}/i,/^\d{9,}$/];
    for (let index = 0; index < datos.length-1; index++) {
        if (datos[index].value == null || datos[index].value.length == 0 || !validacion[index].test(datos[index].value) ) {
            alert("Debe llenar todos los campos correctamente");
            datos[index].focus();
            return false;
        }
    }
    alert("Enviado");
}




	

function iniciar_Sesion(){
    const email = document.getElementById("Email").value;
    const password = document.getElementById("password1").value;
    await fetch("index.php?c=user&a=login",{
        method: "POST",
        cache: "no-cache",
        body: JSON.stringify({
            correo: email,
            password: password
        })
    }).then(res => res.json())
    .catch(err =>{
        console.log("Error:",err)
        return false
    })
    .then(response => console.log("Success:",response));
	/*var mail = ['Kelly@gmail.com', 'Frank@gmail.com', 'Luis@gmail.com'];
	var user = ['Kelly Guerrero', 'Frank Elizalde', 'Luis Zambrano'];
    var password = ['1234', '1234', '1234'];
    var rol =['1',  '2', '3'];
	let datos=document.querySelectorAll("#modal input");
	let correos=datos[0].value, usuarios=datos[0].value, pass=datos[1].value;
	var iteracion = 0; 
	var name ="";
	var tipo ="";
	
      for (var i = 0; i <3; i++) {
		  if((correos===mail[i] ||usuarios===user[i]) && pass===password[i]){
       iteracion++;
       name = user[i];
	   tipo = rol[i];	   
		  }
	  }   
   if (iteracion >= 1) {	
        localStorage.setItem('usuario', name);
        localStorage.setItem('on',1);
		localStorage.setItem('rol', tipo);
	    location.href='./index.html';
	
		
    } else {
        alert("Usuario y/o contraseña incorrectos");
        return false;
    }*/
}

function logeado(){
    let userLoging=document.querySelector("#navbarDropdown1");
	let userPerfil=document.querySelectorAll("#perfil");
	let admi=document.querySelector("#navbarDropdown");
	let PerfilReg=document.querySelectorAll("#users");
	let EmpReg=document.querySelectorAll("#empresa");
    let VentReg=document.querySelectorAll("#venta");
	let Sol=document.querySelectorAll("#solicitud");
	let loginButton=document.querySelectorAll("#reg");
	let Contacto=document.querySelectorAll("#conta");
	let login =document.querySelectorAll("#login");
	
	let img =login[login.length-1].parentNode;
 	let conta =Contacto[Contacto.length-1].parentNode;
	let solic =Sol[Sol.length-1].parentNode;
	let ventas =VentReg[VentReg.length-1].parentNode;
	let empresa =EmpReg[EmpReg.length-1].parentNode;
    let userperf =PerfilReg[PerfilReg.length-1].parentNode;
	let perfil =userPerfil[userPerfil.length-1].parentNode;
    let padre=loginButton[loginButton.length-1].parentNode;
    usuario=localStorage.getItem('usuario');
	image=
	tipo =localStorage.getItem('rol');
    on=localStorage.getItem('on');
    if (usuario !== null && on==='1'){
       userLoging.innerHTML=usuario;
	   perfil.removeChild(userPerfil[userPerfil.length-1]);
       let b =crearElementoPersonalizado('a',{id:"perfil1",class:"dropdown-item",href:"./perfil.html"});
       b.innerHTML='Mi Perfil';
       perfil.appendChild(b);
	  
       padre.removeChild(loginButton[loginButton.length-1]);
       let a =crearElementoPersonalizado('a',{id:"cerrar",class:"dropdown-item",href:"./index.html"});
       a.innerHTML='Cerrar sesion';
       padre.appendChild(a);
       a.addEventListener('click',e=>{
        localStorage.clear();
	   
    });
    }
	
	if(tipo ==='1'){ /*Funciones habilitadas solo para Administrador*/
	   admi.innerHTML='Registros';
	   
	
	  img.innerHTML='<img src="img/Female_user.png" id="login" alt="login" style="padding-bottom:0px;"/>';
	  
	  
	   userperf.removeChild(PerfilReg[PerfilReg.length-1]);
       let c =crearElementoPersonalizado('a',{id:"RegisUser",class:"dropdown-item",href:"./Registros_Usuario.html"});
       c.innerHTML='Registros de Usuarios';
       userperf.appendChild(c);
	   
	   empresa.removeChild(EmpReg[EmpReg.length-1]);
       let d =crearElementoPersonalizado('a',{id:"empreg",class:"dropdown-item",href:"./Registros_Empresa.html"});
       d.innerHTML='Registro de Empresas';
       empresa.appendChild(d);

	   solic.removeChild(Sol[Sol.length-1]);
       let f =crearElementoPersonalizado('a',{id:"Solicitudes",class:"nav-link",href:"./Consulta_Solicitudes.html"});
       f.innerHTML='Solicitudes de Empleo';
       solic.appendChild(f);
	   
	   ventas.removeChild(VentReg[VentReg.length-1]);
       let e =crearElementoPersonalizado('a',{id:"ventas",class:"dropdown-item",href:"./Registros_Ventas.html"});
       e.innerHTML='Registro de Ventas';
       ventas.appendChild(e);
	  
	  conta.removeChild(Contacto[Contacto.length-1]);
       let g =crearElementoPersonalizado('a',{id:"none",class:"none",href:"./#"});
       g.innerHTML='';
       conta.appendChild(g);
	   
	}
	
	if(tipo ==='2'){ /*Funciones habilitadas solo para Trabajador*/
	   admi.innerHTML='Control';
	   
	    img.innerHTML='<img src="img/male_user.png" id="login" alt="login" style="padding-bottom:0px;"/>';
	   userperf.removeChild(PerfilReg[PerfilReg.length-1]);
       let c =crearElementoPersonalizado('a',{id:"RegisPed",class:"dropdown-item",href:"./Registros_Usuario.html"});
       c.innerHTML='Registros de Pedidos';
       userperf.appendChild(c);
	   
	   
	  solic.removeChild(Sol[Sol.length-1]);
       let f =crearElementoPersonalizado('a',{id:"Solicitudes",class:"none",href:"SolicitudP.html"});
       f.innerHTML='';
       solic.appendChild(f);
	   
	    let d =crearElementoPersonalizado('a',{id:"empreg",class:"dropdown-item",href:"./pedidos.html"});
       d.innerHTML='';
       empresa.appendChild(d);
	   
	   conta.removeChild(Contacto[Contacto.length-1]);
       let g =crearElementoPersonalizado('a',{id:"none",class:"none",href:"./#"});
       g.innerHTML='';
       conta.appendChild(g);
	   
	   
	}
	
	if(tipo ==='3'){ /*Funciones habilitadas solo para Usuario Final*/
	
	  img.innerHTML='<img src="img/login_user.png" id="login" alt="login" style="padding-bottom:0px;"/>';
	   empresa.removeChild(EmpReg[EmpReg.length-1]);
	    userperf.removeChild(PerfilReg[PerfilReg.length-1]);
       let c =crearElementoPersonalizado('a',{id:"Spedido",class:"dropdown-item",href:"./index.html#servicio"});
       c.innerHTML='Solicitar Pedido';
       userperf.appendChild(c);
	   
       let d =crearElementoPersonalizado('a',{id:"empreg",class:"dropdown-item",href:"./pedidos.html"});
       d.innerHTML='Catálogo de Productos';
       empresa.appendChild(d);
	   
	}
	

	
    let active=self.location.href;
    if(active.indexOf("/index.html?")>1){
        location.href='./index.html'
    }
}
logeado();