<section id="modal">
  <div class="modal fade" id="signupPage">
    <div class="modal-dialog" style="margin-top:150px;  ">
      <div class="modal-content content-center Design" style="padding-right:25px;">
        <div class="row">
          <div class=" col-md-6" style="padding-top:0px;">
            <img src="./src/img/ww.jpg" class="logo-brand" alt="logo" id="imga">
          </div>
          <div class="col-md-6">
            <div class="modal-header text-center ">
              <h3 style="color:white;" class="modal-title text-center w-100 font-weight-bold">
                <ion-icon name="person-circle-outline"></ion-icon>
                Iniciar Sesión
              </h3>
              <button type="button" class="close" data-dismiss="modal" aria-lable="close"
                style="color:white;">&times;</button>
            </div>
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1" style="margin-right:320px; width:max-content;color:white;">
                  <ion-icon name="mail-outline"></ion-icon>
                  Correo
                </label>
                <input type="email" class="form-control validate" id="Email" aria-describedby="emailHelp"
                  placeholder="usurio@wedelevery.com">
                <small id="emailHelp" class="form-text text-dark" style="width:max-content; padding-right: 200px;">
                  verificar email ingresado.
                </small>
              </div>
              <div class="form-group">
                <label for="Passwor1" style=" width:max-content; padding-right:285px; color:white;">
                  <ion-icon name="medical-outline"></ion-icon>Contraseña
                </label>
                <input type="password" class="form-control validate" id="password1" placeholder="*****">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check" style="margin-right:800px; color:white;">
                  Recordarme
                </label>
              </div>
              <button type="submit" class="btn btn-primary" id="btn-col" style="margin-left:20px;"
                onclick="return iniciar_Sesion()">
                Iniciar sesion
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="Register">
  <div class="modal fade" id="signinPage">
    <div class="modal-dialog" style="margin-top:150px;  ">
      <div class="modal-content content-center Design" style="padding-right:25px;">
        <div class="row">
          <div class=" col-md-6" style="padding-top:0px;">
            <img src="./src/img/w2.jpg" class="logo-brand" alt="logo" id="imga">
          </div>
          <div class=" col-md-6">
            <div class="modal-header text-center ">
              <h3 style="color:white;" class="modal-title text-center w-100 font-weight-bold">
                <ion-icon name="person-circle-outline"></ion-icon>
                Registrarse
              </h3>
              <button type="button" class="close" data-dismiss="modal" aria-lable="close"
                style="color:white;">&times;</button>
            </div>
            <form>
              <div class="form-group">
                <label for="name" style=" width:max-content; padding-right:285px; color:white;">
                  <ion-icon name="person-outline"></ion-icon>
                  Nombre
                </label>
                <input type="text" class="form-control validate" id="name1" placeholder="Ingrese su nombre">
              </div>
              <div class="form-group">
                <label for="edad" style=" width:max-content; padding-right:285px; color:white;">
                  <ion-icon name="person-outline"></ion-icon>
                  Edad
                </label>
                <input type="text" class="form-control validate" id="edad1" placeholder="Ingrese su edad">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="margin-right:320px; width:max-content;color:white;">
                  <ion-icon name="mail-outline"></ion-icon>
                  Correo
                </label>
                <input type="email" class="form-control validate" id="Email1" aria-describedby="emailHelp"
                  placeholder="usurio@wedelevery.com">
                <small id="emailHelp" class="form-text text-dark" style="width:max-content; padding-right: 200px;">
                  verificar email ingresado.
                </small>
              </div>
              <div class="form-group">
                <label for="Passwor1" style=" width:max-content; padding-right:285px; color:white;">
                  <ion-icon name="medical-outline"></ion-icon>
                  Contraseña
                </label>
                <input type="password" class="form-control validate" id="password1" placeholder="*****">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label" for="check" style="color:white;">
                  Acepto terminos y condiciones
                </label>
              </div>
              <button type="submit" class="btn btn-primary" id="btn-col" style="margin-left:20px;"
                onclick="return validar_Registro()">
                Registrarse
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="carrusel" class="carrusel  w-100  h-100" style="padding-bottom: 30px; padding-top:70px; ">
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators" style="z-index: 1">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
      <li data-target="#carouselIndicators" data-slide-to="3"></li>
      <li data-target="#carouselIndicators" data-slide-to="4"></li>
      <li data-target="#carouselIndicators" data-slide-to="5"></li>
      <li data-target="#carouselIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img class="tamaño d-block w-100 h-30 " src="./src/img/inicio1.jpg" alt="First slide">
        <div class="carousel-caption d-block d-xl-block  bg-dark-grey " style=" z-index: 1;">
          <h2>¿Cansado de ir a realizar tus compras?,nosotros lo hacemos por ti</h2>
          <a href="#servicio" class="btn btn-color topmargin-sm">Enterate como <ion-icon
              name="checkmark-circle-outline"></ion-icon></a>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="tamaño   d-block w-100 h-30 " src="./src/img/inicio3.jpg" alt="Second slide">
        <div class="carousel-caption d-block d-xl-block bg-dark-grey" style=" z-index: 1;">
          <h2> WE DELIVERY! Garantiza seguridad y efectividad en cada una de nuestras entregas</h2>
          <a href="#nosotros" class="btn btn-color topmargin-sm">Conocenos mas sobre nosotros <ion-icon
              name="business-outline"></ion-icon></a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="tamaño  d-block w-100 h-30" src="./src/img/inicio2.jpg" alt="Third slide">
        <div class="carousel-caption d-block d-xl-block  bg-dark-grey " style=" z-index: 1;">
          <h2>¿Quieres ser parte del gran equipo de WE DELIVERY! ?</h2>
          <a href="empleo.html" class="btn btn-color topmargin-sm">Registrar Solicitud <ion-icon name="people-outline">
            </ion-icon></a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="tamaño   d-block w-100 h-30" src="./src/img/inicio4.jpg" alt="four slide">
        <div class="carousel-caption d-block d-xl-block  bg-dark-grey " style=" z-index: 1;">
          <h2> No te quedes con hambre, realiza tus pedidos a domicilio</h2>
          <a href="SolicitudP.html" class="btn btn-color topmargin-sm">Registrar Pedido<ion-icon name="cart-outline">
            </ion-icon></a>
        </div>
      </div>
      <div class="carousel-item">
        <img class="tamaño   d-block w-100 h-30" src="./src/img/inicio5.jpg" alt="five slide">
        <div class="carousel-caption d-block d-xl-block  bg-dark-grey" style=" z-index: 1;">
          <h2>Contamos con alta demanda de productos farmaceuticos</h2>
          <a href="pedidos.html#FARMACiAS1" class="btn btn-color topmargin-sm">Saber Más<ion-icon name="heart-outline">
            </ion-icon></a>

        </div>
      </div>
      <div class="carousel-item">
        <img class=" tamaño  d-block w-100 h-30" src="./src/img/inicio6.jpg" alt="six slide">
        <div class="carousel-caption d-block d-xl-block bg-dark-grey" style=" z-index: 1;">
          <h2>Disfruta de una mejor experiencia descargando Nuestra app</h2>
          <a href="#" class="btn btn-color topmargin-sm">Descargar <ion-icon name="cloud-download-outline"></ion-icon>
            </a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<section id="portafolio"
  style=" height:auto; z-index:0; margin-top: 20px; margin-bottom: 20px; background:-webkit-linear-gradient(rgba(4, 12, 22, 0.623),rgba(0, 0, 0, 0.651));">
  <div class="content-center">
    <div class="row" style="color:black ;">
      <div class="col-md-4"
        style="display : inline; align-items:justify; margin-top: 20px;margin-bottom: 20px; padding-left:0px;">
        <img src="./src/img/comida.gif" class="img-fluid" style=" width: 500px;height: 260px;" alt="nexo">
      </div>
      <div class="col-md-8">
        <h2 name="servicio" id="servicio">Realiza tus pedidos en supermercados,Farmacias,</br> restaurantes y <b>muchos
            otros más</b></h2>
        <p style="text-align: justify; font-size: 18px;"> No tienes tiempo y necesitas comprar algo? Pídelo y recíbelo
          en minutos con <b>WE DELEVERY!</b>. Dile hola a tus comidas favoritas a cualquier hora y lugar. ¡Pide ahora!
          Tus pedidos sin contacto. Cuidamos de ti. Tu salud va primero. Haz tu pedido ahora.a</p>
      </div>

    </div>

  </div>
</section>

<section class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="portafolio-container">
        <div class="portafolio-details" style="z-index: 1">
          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar Comida Rapida</h2>
            <p>- Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion1.jpg" class="img-fluid" alt="portafolio-1">

      </div>
    </div>
    <div class="col-md-4">
      <div class="portafolio-container">
        <div class="portafolio-details" style="z-index: 1">
          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar pedido de comida Gourmet</h2>
            <p>-Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion6.jpg" class="img-fluid" alt="portafolio-4">

      </div>
    </div>
    <div class="col-md-4">
      <div class="portafolio-container">
        <div class="portafolio-details" style="z-index: 1">
          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar pedidos a supermercados</h2>
            <p>-Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion2.jpg" class="img-fluid" alt="portafolio-2">

      </div>
    </div>
    <div class="col-md-4">
      <div class="portafolio-container">
        <div class="portafolio-details" style="z-index: 1">
          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar productos farmaceuticos</h2>
            <p>- Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion3.jpg" class="img-fluid" alt="portafolio-3">

      </div>
    </div>
    <div class="col-md-4">
      <div class="portafolio-container">
        <div class="portafolio-details" style="z-index: 1">

          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar pedido de Electrodomesticos</h2>
            <p>-Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion4.jpg" class="img-fluid" alt="portafolio-4">

      </div>
    </div>
    <div class="col-md-4">
      <div class="portafolio-container" id="nosotros">
        <div class="portafolio-details" style="z-index: 1">

          <a href="index.php?a=pages&p=pedidos">
            <h2>Solicitar pedido de bebidas alcoholicas</h2>
            <p>- Ver Productos</p>
          </a>
        </div>
        <img src="./src/img/sesion5.jpg" class="img-fluid" alt="portafolio-4">

      </div>
    </div>
  </div>
  </div>

</section>

<section
  style=" z-index:0; padding-bottom: 30px; margin-top: 20px; margin-bottom: 20px; color:black ; background:-webkit-linear-gradient(rgba(4, 12, 22, 0.623),rgba(0, 0, 0, 0.651))">
  <div class="container">
    <div class="content-center-footer">
      <h2 style="font-size: 50px;"><b>WE DELIVERY! </b>Quienes somos</h2>
      <p style="text-align: justify; font-size: 18px;"> <b>WE DELIVERY!</b> es la compañía líder de delivery online de
        víveres y comida en Ecuador. Nuestro servicio consiste en brindar una plataforma online simple, práctica y sin
        costo adicional que permite a los usuarios ordenar delivery a restaurantes o supermercados. ¡Nos motiva hacerte
        la vida más fácil!. </p>
    </div>
    <div class="row ">
      <div class=" col-md-4">
        <img src="./src/img/emp1.jpg" class="img" alt="emp-1">
      </div>
      <div class=" col-md-4">
        <img src="./src/img/emp2.jpg" class="img" alt="emp-2">
      </div>
      <div class=" col-md-4 ">
        <img id="contact" src="./src/img/emp3.jpg" class="img" alt="emp-3">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container content-center-p" style="color:black">
    <h2 class="text-center">Contactanos</h2>
    <p class="text-center">Estamos dispuestos a resolver tus dudas y sugerencias!</p>

    <div class="row">
      <div class="col-md-4">

        <p><span class="glyphicon glyphicon-map-marker"></span>Guayaquil, Ecuador</p>
        <p><span class="glyphicon glyphicon-phone"></span>Telefonos +593 985225820 - 5106207 </p>
        <p><span class="glyphicon glyphicon-envelope"></span>Correo: Servicios@wedelevery.com</p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Correo" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea>

        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right btn btn-color" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>