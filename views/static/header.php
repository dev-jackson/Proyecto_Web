<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Righteous&display=swap" rel="stylesheet"> 
      <link rel="stylesheet" href="./src/css/estilos.css">
      <link rel="shortcut icon" href="./src/img/Logo.ico">
    <title >We Delivery!</title>
	<style>
	  #logo{
       width:50px;
       height:50px;
       margin-bottom: 10px;
     }
	    .Design{
    background:-webkit-linear-gradient(black, rgb(2, 16, 44));
      border-radius: 10px;
    height:auto;
      width:600px;
      color:black;
     }
	 #imga{
	 width: 290px;
	 height: 360px;
	 }
	 
       
	</style>
  </head>
  <body >
        <!--Implementacion con herramienta responsive Boostrap 4-->

      
        <nav  class="navbar navbar-expand-lg w-100" style="position:fixed; z-index: 2; "  >
          <div class="container jh-100 w-100" >
    
            <div class="navbar-header">    
                <a class="navbar-brand h-auto" style="font-size: 32px;" href="index.html"> <img src="./src/img/Logo.png" id="logo" alt="logo"/> WE DELIVERY! </a>
                <button class="navbar-toggler" style=" margin-left: 10px;"  type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <ion-icon name="menu-outline"></ion-icon>
                </button>
        </div>
    
        </div>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-right: 60px; width: 1600px; background-color:black;">
            <div class="container  w-100  " style=" width:auto; background-color: rgba(2, 2, 31, 0.24);">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php" id="Inicio">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" id="solicitud" href="#nosotros"> Acerca de Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" id="users" href="" data-toggle="modal" data-target="#signupPage">Solicitar Pedido</a>
                  <a class="dropdown-item" id="empresa"href="" data-toggle="modal" data-target="#signupPage">Catálogo de Productos</a>
                  <a class="dropdown-item" id="venta" href="empleo.html">Trabaje con Nosotros</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="conta" href="#contact">Contactanos</a>
				
              </li>
				
			  <li class="nav-item" style=" margin-top:5px;">
                 <a class="none" id="login" href="#"> </a>			  
			  </li>
              <li class="nav-item dropdown">
			  
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" id="perfil" href="" data-toggle="modal" data-target="#signupPage" >Iniciar Sesion</a>
				  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" id="reg" href="" data-toggle="modal" data-target="#signinPage">Registrarse</a>
                </div>
              </li>
            </ul>
            
          </div>
        </div>
        </nav>