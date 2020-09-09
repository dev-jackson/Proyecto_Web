<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <div class="container-bnss">
      <div class="img-bnss">
          <img src="./src/imgs/add_card.svg" alt="" width="100%" height="100%">
      </div>
    <div class="data-form">
        <form class="bnss-form" action="">
            <h1>Registro Producto</h1>
            <label for="">Nombre del producto:</label>
            <input type="text" name="name" value="" id="name" placeholder="Ingrese nombre de la empresa" onkeypress="return soloLetras(event);" >
            <label for="">Precio:</label>
            <input type="text" name="precio" value="" max="11" id="precio" placeholder="Ingrese precio" onkeypress="return soloNumeros(event);">
            <label for="">Cantidad:</label>
            <input type="text" name="cant" value="" id="cant" placeholder="Ingrese cantidad" onkeypress="return soloNumeros(event);" >
            <label for="">Descricion:</label>
            <input type="text" name="descrit" value="" id="descrit" placeholder="Ingrese alguna descricion" onkeypress="return soloLetras(event);" >
            <label for="">Disponilidad:</label>
            <select class="" name="" id="dispon">
                <option value="0">Total</option>
                <option value="1">Intermedia</option>
                <option value="2">No disponible</option>
            </select>
            <label for="">Categoria:</label>
            <select class="" name="" id="cat-elect">
                <option value="0">Alimentos</option>
                <option value="1">Juegos</option>
                <option value="2">Electronica</option>
            </select>
            <div class="btns-bnss">
                <input type="submit" id="bnssEnviar" value="Enviar">
                <input type="button" name="back" id="back" value="Cancelar">
            </div>
        </form>
    </div>
  </div>
</body>
    <script type="text/javascript">
        document.getElementById('bnssEnviar').onclick = function(){
            var name = document.getElementById('name').value;
            var ruc = document.getElementById('precio').value;
            var cant = document.getElementById('cant').value;
            var dispon = document.getElementById('dispon').value;
            var catElect = document.getElementById('cat-elect').value;
            var descrit =document.getElementById('descrit').value;
            if(name==""||ruc==""||dispon==""||catElect==""||descrit==""){
                swal("Error!", "Debe ingresar todos los campos", "error");
                return false;
            }else{
                swal("Buen trabajo!", "Registro exitoso", "success");
                setTimeout(()=>{
                    window.location.href = "../views/product.html";
                },2000);
                return true;
            }
        }
        document.getElementById('back').onclick = function(){
            swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de cancelar registro",
                     icon: "warning",
                     buttons: {
                     si:{
                      text:"si",
                      value:"si"
                      },
                      no:{
                      text:"no",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {
                case "si":
                           window.location.href ="../views/product.html";
                  break;
                case "no":

                  break;
            }
          })
        }
    </script>
</html>
