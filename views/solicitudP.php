<?php require_once 'static/header.php' ?>
<link type="text/css" rel="stylesheet" href='./src/css/component-chosen.css'>
    <link type="text/css" rel="stylesheet" href='./src/css/component-chosen.min.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/css/bootstrap.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Righteous&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./src/js/bootstrap.js">
	  <script src="./src/js/popper.min.js"></script>
	  <link rel="stylesheet" href="./src/css/sweetalert2.min.css">
      <link rel="stylesheet" href="./src/css/estilos.css">
      <style>
      .Design{
    background:-webkit-linear-gradient(rgba(4. 12. 22. 0.623).rgba(0. 0. 0. 0.651));
      border-radius: 10px;
   
      width: auto;
	  color:black;
      }
	  #logo{
       width:50px;
       height:50px;
       margin-bottom: 10px;
     }
       
	
    </style>
<section id="portafolio" style=" padding-top:150px;" >
    <div class="container-max-width">
      <div class="content-center-sol " >
      
          <div class="content-center Design">
		  <h1 style="color:black; font-size:50px;"><ion-icon name="cube-outline"></ion-icon>Solicitar Pedido</h1>
    
            <form >
              
                <!--Es Neceasario un filtro para que muestre el select acorde a la categoria-->
                <!--SeLec de ejemplo -->
                <div class="form-group">
				
				<select name="Categoria" id="Categoria"  
             class="form-control chosenCategoria" onchange="change(this.id, 'marca')"
             value="< typeof Categoria != 'undefined' ? Categoria : '' %>">
			  <option selected>Seleccione Categoria de Producto</option>
              <option value="HAMBURGUEZAS">HAMBURGUEZAS</option>
              <option value="PIZZAS">PIZZAS</option>
              <option value="PARRILLADAS">PARRILLADAS</option>
              <option value="GOURMET">GOURMET</option>
              <option value="SUPERMERCADOS">SUPERMERCADOS</option>
              <option value="LICORERIAS">LICORERIAS</option>
              <option value="ELECTRODOMESTICOS">ELECTRODOMESTICOS</option>
              
            </select>
      </div>
      <div class="form-group">
        <div class="row">
		<div class="col-md-2">
		<h1><ion-icon name="search-outline" ></ion-icon> </h1>
		</div>
		<div class="col-md-10">
          <select id="marca" name="Marca" 
          class="form-control chosenColonia" value="<typeof Marca != 'undefined' ? Marca : '' %>">
		    <option selected>Seleccione la marca de preferencia</option>
            <option value=""></option>
          </select>
		  </div>
		  </div>
      </div>
         

              </form>
  
        </div>
		


        <div class="container" id="lista-productos">
            <div class="product-item" category="MC DONALD'S">
            <div class="card-deck mb-3 text-center"  >
                <div class="card mb-4 shadow-sm" >
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"><br>BIG MAC DELUXE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/mcdonalds/big_mac.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>100% PURA DOBLE CARNE</li>
                            <li>QUESO DERRETIDO </li>
                           <li>MOSTAZA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">IMPERDIBLE DOBLE EXTRA QUESO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/mcdonalds/doble_queso.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>DOS CARNES CON SALSAS</li>
                            <li> TOMATE Y MOSTAZA</li>
                            <li>QUESO CHEDDAR</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

				
				          <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"><br>MC BACON DELUXE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/mcdonalds/Mc_Bacon.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>DOS CARNES Y SALSAS</li>
                            <li>QUESO CHEDDAR </li>
                            <li>TOXINO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
             <div class="product-item" category="CARL'S JR">
            <div class="card-deck mb3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">JR BBQ BURGER</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/carls/bbqburger.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>100% CARNE</li>
                            <li>SALSA BBQ. CEBOLLA Y PEPINOS</li>	
                            <li>QUESO AMERICANO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>
				   <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SUPER STAR WITH CHEESE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/carls/superstar.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>2 PIEZAS DE CARNE</li>
                            <li>SALSA ESPECIAL</li>	
                            <li>QUESO AMERICANO</li>
							 <li>TOMATE</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

             
				 <div class="card mb-3 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">TERIYAKI BURGER</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/carls/teriyaki.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PIÑA A LA PARRILLA</li>
                            <li>SALSA TERIYAKI</li>
                            <li>QUESO SUIZO Y CEBOLLA MORADA </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>
               </div>
            </div>  
			
              <div class="product-item" category="BURGER KING">
            <div class="card-deck mb-3 text-center"  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"> DOBLE CON QUESO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/king/doble_queso.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>DOS CARNES</li>
                            <li>TOCINO Y SALSA STACKER</li>
                            <li>COLA Y PAPAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">1/4 LIBRA CON QUESO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/king/libra_queso.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>CARNE PARRILLERA</li>
                            <li>QUESO AMERICANO</li>
                            <li>CEBOLLA PICKLES</li>
							<li>COLA Y PAPAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm" >
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">KING DE POLLO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/king/king_pollo.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5.20</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>POLLO EMPANIZADO</li>
                            <li>QUESO AMERICANO</li>
                            <li>PAN DE SEMILLAS CON AJONJOLI</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>
				</div>

            </div>
			  <div class="product-item" category="DOMINO PIZZA">
			<div class="card-deck mb-3 text-center "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">EXTRAVANZA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/domino/extra.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">16.80</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>QUESO MOZARELLA</li>
                            <li>ACEITUNAS</li>
                            <li>JAMON Y CHAMPIÑONES</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="10">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">DELUXE PIZZA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/domino/Deluxe.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">20.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>SALCHICHA ITALIANA</li>
                            <li>PIMIENTO Y PEPPERONI</li>
                            <li>QUESO MOZARELLA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="11">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">VEGETARIANA PREMIUM</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/domino/Vegetariana.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>8 GB RAM</li>
                            <li>COLOR NEGRO</li>
                            <li>1 TB DD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="12">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
			  <div class="product-item" category="PIZZA HUT">
			<div class="card-deck mb-3 text-center "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">MEET SUPREMA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/hut/meet.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">18.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PEPPERONI JAMON  </li>
                            <li>SALCHICHA ITALIANA</li>
                            <li>TOCINO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="13">Comprar</a>
                    </div>
                </div>
 
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">MEAT LOVER'S</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/hut/choza.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">20.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>CARNE Y JAMON</li>
                            <li>PEPPERONI</li>
                            <li>SALCHICHA ITALIANA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="14">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SUPER SUPREMA </h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/hut/ssuprema.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            
                            <li>PEPPERONI</li>
                            <li>SALCHICHA ITALIANA</li>
                            <li>CHAMPIÑONES </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="15">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
			  <div class="product-item"  category="PAPA JHONS">
			<div class="card-deck mb-3 text-center  " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">BOOM DE JAMÓN</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/papa/boom.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">14.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>EXTRA JAMON	</li>
                            <li>EXTRA QUESO</li>
                            <li>MOZARELLA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="16">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">POMODORO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/papa/pomo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">14.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>TOMATE. ÓREGANO</li>
                            <li>EXTRA QUESO</li>
                            <li>MOZARELLA POMODORO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="17">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CHICKEN BBQ</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/papa/chicken.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">14.90</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>SALSA BBQ</li>
                            <li>PECHUGA DE POLLO</li>
                            <li>TOCINO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="18">Comprar</a>
                    </div>
                </div>
               </div>
             </div>
		  <div class="product-item"  category="FYBECA">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">FEROGLOBIN</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/fybeca/ferogoblin.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15.10</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>FORMACION DE HEMOGLOBINA</li>
                            <li>GLOBULOS ROJOS</li>
                            <li>VITAMINAS B</li>
							<li>VITAMINAS D</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="19">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">HEPALIVE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/fybeca/hepalive.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">8.16</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ENFERMEDADES CRONICAS DEL HIGADO</li>
                            <li>HEPATITIS</li>
                            <li>HIGADO GRASO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="20">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PRAXIS</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/fybeca/praxis.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">33.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PARA ARTRITIS REUMATOLOGICA</li>
                            <li>OSTEOARTRITIS</li>
                            <li>USO PAR DEPORTISTAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="21">Comprar</a>
                    </div>
                </div>
             </div>
            </div>
			  <div class="product-item" category="SANA SANA">
			<div class="card-deck mb-3 text-center "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">TERMAX 500G</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/sana/termax.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">33.60</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>TABLETAS</li>
                            <li>ANALGESICO Y ANTIPIRÉTICO</li>
                            <li>PARACETAMOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="22">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">FIVE SKIN</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/sana/five.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>CONDONES PREMIUM</li>
                            <li>DE LATEX ULTRASENSIBLES</li>
                            <li>LUBRICANTE EXTRA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="23">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">VITANGO 200MG</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/sana/vitango.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">14.70</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>REDUCE EL ESTRES</li>
                            <li>ALIVIA FATIGA</li>
                            <li>IRRITABILIDAD Y TENSION</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="24">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
			  <div class="product-item" category="PHARMACY'S">
			<div class="card-deck mb-3 text-center  "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SILLA DE RUEDA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/pharmacys/silla.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">189.48</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PLEGABLE DE FACIL TRANSPORTE 	</li>
                            <li>APOYO DE BRAZOS FIJOS</li>
                            <li>RUEDAS MACIZAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="25">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ABRILAR</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/pharmacys/abrilar.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.49</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ACCION TERAPEUTICA</li>
                            <li>MUCOLITICO</li>
                            <li>BRONCOESPAMOLITICO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="26">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PEDIALYTE MAX</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/pharmacys/pedialyte.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3. 19</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>IDEAL PARA DESHIDRATACION</li>
                            <li>CONTIENE ZINC</li>
                            <li>CONTIENE CLORURO DE SODIO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="27">Comprar</a>
                    </div>
                </div>
              </div>
            </div>
			  <div class="product-item" category="CASA DE JULIAN">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LANGOSTINOS ENCOCADOS</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/julian/cg.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ACOMPAÑADO DE CORVICHE DE MADURO</li>
                            <li>COCO PRIETO</li>
                            <li>PLATO FUERTE</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="28">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">TORTA DE RES CON ADEREZO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/julian/torta.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">20.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ADEREZO DE MOSTAZA</li>
                            <li>CREMA VINAGRETA CALIENTE DE CAÑA. NARANJA</li>
                            <li> Y OREGANO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="29">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CANILLA DE TERNERO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/julian/canilla.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">23.70</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MORO PRIETO</li>
                            <li>VINAGRE CALIENTE </li>
                            <li>COPA DE VINO BLANCO</li>
							
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="30">Comprar</a>
                    </div>
                </div>
              </div>
            </div>
			  <div class="product-item"  category="RIOKO">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LOMO DE RIOKO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/rioko/lomo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">20.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>LOMO SALTEADO</li>
                            <li>TIERNO Y JUGOSO</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="31">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SALMON AL GRILL</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/rioko/risotto.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">23.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ACOMPAÑADO CON LECHE DE COCO</li>
                            <li>RUCULA BALSAMICA</li>
                            <li>TORTIGLIONE</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="32">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SALMON</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/rioko/salmon.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">18.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ACOMPAÑADO CON SALSA DE JENGIBRE</li>
                            <li>RISOTTO DE ESPARRAGOS</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="33">Comprar</a>
                    </div>
                </div>
              </div>
            </div>
			  <div class="product-item" category="LE GOURMET">
			<div class="card-deck mb-3 text-center  "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"><br>PARRILLADA DE TERNERA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/gourmet/carne.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>RELLENA DE ARANDANOS</li>
                            <li>ANDINOS</li>
                            <li>CARNE DE PRIMERA CALIDAD</li>
							 
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="34">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CREMEUX DE BABA DE CACAO </h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/gourmet/cremeu.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>CHOCOLATE BAÑADO EN SIROPE DE RON<li>
                            <li>CREMA INGLESA</li>
                            <li> ADERESO DE VAINILLA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="35">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"><br>CEVICHE MAR DE CORTÉS</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/gourmet/ceviche.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">23.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PREPARADA CON SOYA</li>
                            <li>LANGOSTINOS</li>
                            <li>CEBOLLIN</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="36">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
			  <div class="product-item" category="MI COMISARIATO">
			<div class="card-deck mb-3 text-center "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CAREFREE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/comisariato/carefree.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4.69</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>PROTECCION AROMA</li>
                            <li>CONTIENE 120 UNIDADES</li>
                            <li>CAPA PROTECTORA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="37">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">YOGURT CHIVERIA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/comisariato/yogurt.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2.09</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>SABOR A FRUTILLA</li>
                            <li>950 G</li>
                            <li>SEMIDESCREMADO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="38">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">HELADO PINGUINO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/comisariato/oreo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2.89</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>SABORES</li>
                            <li>900 ML</li>
                            <li>GALLETA OREO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="39">Comprar</a>
                    </div>
                </div>
              </div>
            </div>
			  <div class="product-item"  category="SUPERMAXI">
			<div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CEREAL CHOCAPIC</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/megamaxi/cereal.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>600 G</li>
                            <li>CEREALES INTEGRALES</li>
                            <li>CON VITAMINAS Y MINERALES</li>
                          
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="40">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"> DEJA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/megamaxi/deja.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">10.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>5 KG</li>
                            <li>DETERGENTE</li>
                            <li>MULTIACCION DE LIMPIEZA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="41">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LASAGNA SUMESA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/megamaxi/lasagna.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">5.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>26 LAMINAS	</li>
                            <li>CON VITAMINAS Y MINERALES</li>
                            <li>PREPARACION INSTANTANEA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="42">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
			  <div class="product-item" category="TIA S.A.">
			<div class="card-deck mb-3 text-center"  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SHAMPOO HEAD - SHOULDERS</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tia/shampoo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">4.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ANTICASPA</li>
                            <li>180 ML</li>
                            <li>PROTECCIÓN CAIDA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="43">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PAPEL HIGENICO<br> FAMILIA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tia/ph.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">3.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MEGARROLLO</li>
                            <li>ALCOCHAMAX</li>
                            <li>2 ROLLOS GRATIS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="44">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">JABÓN DE BAÑO<br> PROTEX</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tia/jabon.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$. <span class="">5397</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>110 G 3 UNIDADES</li>
                            <li>PARA LA BUENA SALUD DE LA PIEL</li>
                            <li>FRESH</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="45">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
			  <div class="product-item" category="LICORERIA GYE">
			<div class="card-deck mb-3 text-center"  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">ZHUMIR CANUTO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/licoreria/canuto.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>AGUARDIENTE DE CAÑA</li>
                            <li>750 ML</li>
                            <li>100% ECUATORIANO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="46">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CLUB PREMIUM</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/licoreria/club.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1.30</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>CERVEZA DE MALTA</li>
                            <li>COLOR DORADO</li>
                            <li>4.2% DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="47">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">JHONNY WALKER RED</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/licoreria/jhrojo.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">22.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>200 ML</li>
                            <li>COLOR ORO CLARO</li>
                            <li>WHISKY DE MALTA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="48">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
			  <div class="product-item" category="ZONA FRIA PM"> 
			<div class="card-deck mb-3 text-center  "  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CERVEZA PILSENER</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/zonafria/pilsener.png" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1.25</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>FINO SABOR AMARGO</li>
                            <li>INGREDIENTES 100% NATURALES</li>
                            <li>4.2% GRADOS DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="49">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CORONA EXTRA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/zonafria/corona.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">2.30</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>MARCA LIDER EN EL MERCADO</li>
                            <li>CERVERZA DE MALTA</li>
                            <li>4.6 GRADOS DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="50">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">HEINEKEN PILSENER</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/zonafria/heineken.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>COLOR CLARO AMARILLO BRILLANTE</li>
                            <li>CERVEZA HOLANDESA</li>
                            <li>5% DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="51">Comprar</a>
                    </div>
                </div>
                 </div>
            </div>
			  <div class="product-item" category="LA GUARDA">
			<div class="card-deck mb-3 text-center  "  >
                 
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">DELE A MARCA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/guarda/delea.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">25.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>VINO BLANCO</li>
                            <li>750CC</li>
                            <li>SABOR MUY DULCE</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="52">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SOMETHING SPECIAL	</h4>
                    </div>				
                    <div class="card-body">
                        <img src="./src/img/guarda/some.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">17.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>WHISKY DE MALTA</li>
                            <li>750 ML</li>
                            <li>40% DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="53">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SMIRNOFF</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/guarda/vodka.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">15.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>VODKA</li>
                            <li>COLOR INCOLORO. NOTA DE VAINILLA</li>
                            <li>37.5% DE ALCOHOL</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="54">Comprar</a>
                    </div>
                </div>
                </div>
            </div>
			  <div class="product-item" category="LA GANGA">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold"><br>TV SMART <br>HD </h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ganga/tv.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">221.30</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>32 PULGADAS</li>
                            <li>FULL HD</li>
                            <li>DISEÑO FRAMELESS FULL SCREEN</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="55">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">REFRIGERADORA 291L</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ganga/refri.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">482.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>ZONA FRIA</li>
                            <li>BANDEJA REGULABLE</li>
                            <li>GRAN CAPACIDAD Y DURABILIDAD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="56">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LAVADORA WHIRLPOOL</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ganga/lavadora.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">469.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>AHORRO DE AGUA Y ENERGIA</li>
                            <li>LAVADO PROFUNDO</li>
                            <li>PANEL DE FACIL USO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="57">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
			  <div class="product-item" category="CREDITOS ECONOMICOS">
			<div class="card-deck mb-3 text-center"  >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">LAPTOP HP</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/creditos/laptop.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">655.85</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>4 GB RAM</li>
                            <li>COREI 3</li>
                            <li> 1 RAM - WINDOWS 10</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="58">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">IPHONE 11</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/creditos/iphone.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">13015.78</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>6.1" PULGADAS </li>
                            <li>COLOR NEGRO</li>
                            <li>64 GB </li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="59">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">SPLIT PANASONIC</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/creditos/aire.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">1375.86</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>24000 BTU</li>
                            <li>CS-S24TKV</li>
                            <li>COLOR CROMADO</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="60">Comprar</a>
                    </div>
                </div>
               </div>
            </div>
		<div class="product-item" category="COMPUTRON">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">IMPRESORA MULTIFUNCIONAL HP</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/computron/impresora.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">276.78 </span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>SCANEA WIFI</li>
                            <li>CONECTIVIDAD STANDAR USB 2.0</li>
                            <li>ALTA VELOCIDAD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="61">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CAMARA DEPORTIVA GO PRO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/computron/camara.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">459.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>12 MP</li>
                            <li>COLOR NEGRO</li>
                            <li>ULTRA HD</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="62">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PROYECTOR BENQ </h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/computron/proyector.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">257</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>RESOLUCION SVGA 800x600. </li>
                            <li>ENTRADAS HDMIx2 - VGA (D-Sub).</li>
                            <li>BOCINAS DE 2W INTEGRADAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="63">Comprar</a>
                    </div>
                </div>

            </div>
           </div>
		   
		   <div class="product-item" category="TABLITA DEL TARTARO">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PARRILLADA TABLITA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tablita/tablita.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">11.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>LOMO DE RES</li>
                            <li>EMBUTIDOS</li>
                            <li>PAPAS CON SALSA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="64">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PARRILLADA DE POLLO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tablita/tablita2.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">17.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>FILETES DE POLLO</li>
                            <li>EMBUTIDOS</li>
                            <li>PAPAS A LA FRANCESA<li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="65">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">COMBO DE POLLO </h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/tablita/tablita3.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.99</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>HAMBURGUEZA DE POLLO</li>
                            <li>PAPAS A LA FRANCESA</li>
                            <li>SALSAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="66">Comprar</a>
                    </div>
                </div>

            </div>
           </div>
		   
		    <div class="product-item" category="PARRILLADA DEL ÑATO">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CARRÉ</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ñato/carre.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.50 </span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>LOMO DE CERDO</li>
                            <li>2 PERSONAS</li>
                            <li>PAPAS CON SALSA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="67">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">CAMARONES A LA ROMANA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ñato/camarones.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">6.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>SABOR SUAVE</li>
                            <li>10 UNIDADES</li>
                            <li>SALSAS Y ADERESOS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="68">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">BABY MILANESA ÑATO</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/ñato/parrillada.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">8.00</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>LOMO DE RES</li>
                            <li>PARA UNA PERSONA</li>
                            <li>220 GR</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="69">Comprar</a>
                    </div>
                </div>

            </div>
           </div>
		   
		    <div class="product-item" category="PARRILLADA DEL URU">
			<div class="card-deck mb-3 text-center " >
                
                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PARRILLADA SENCILLA</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/uruguayo/sencilla.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">38.90	 </span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li>MORO GRATIS</li>
                            <li>PARA 3 PERSONAS</li>
                            <li>PAN CON AJO Y ENSALADA MIXTA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="70">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm ">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PARRILLADA ESPECIAL</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/uruguayo/especial.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">50.90</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>4 MOROS GRATIS</li>
                            <li>PARA 5 PERSONAS</li>
                            <li>ENSALA MIXTA</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="71">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">PARRILLADA DOBLE</h4>
                    </div>
                    <div class="card-body">
                        <img src="./src/img/uruguayo/doble.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$ <span class="">45.50</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>3 MOROS GRATIS </li>
                            <li>EXTRA CARNE DE LOMO</li>
                            <li>PARA 3 PERSONAS</li>
                            <li>PARA 3 PERSONAS</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="72">Comprar</a>
                    </div>
                </div>

            </div>
           </div>

        </div>
    

	
	
	
	
    </div>
</div>
  <script>
       $('.chosenCategoria. .chosenMarca').chosen({
            no_results_text: "No hay resultados...".allow_single_deselect: true
            }
        );
        $(".chosenCategoria").chosen().on("change". function(event) { 
                                                        document.getElementById('marca').value = "" ;
                            $(".chosenColonia").trigger('chosen:updated');                                                                                                       
                            });
        $(".chosenMarca").chosen().on("chosen:showing_dropdown". function(event) {  
                            $(".chosenMarca").trigger('chosen:updated');                                                                           
                            });
        
  </script>
  <script type = "text/javascript" src = './src/js/categorias.js' ></script> 
	   <script src="./src/js/sweetalert2.min.js"></script>
    <script src="./src/js/carrito.js"></script>
    <script src="./src/js/pedido.js"></script>
	    <script src="./src/js/jquery-3.4.1.min.js" ></script>
    <script src="./src/js/chosen.jquery.js" type="text/javascript"></script>
      <script src="./src/js/validationForm.js"></script>
	  <script src="./src/js/script.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./src/js/bootstrap.js"></script>
  <?php require_once 'static/footer.php' ?>