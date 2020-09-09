<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="../src/css/generalStyle.css">
  <script src="../src/js/index.js" charset="utf-8"></script>
  <title></title>
</head>

<body>
  <div class="container-bnss">
      <div class="img-bnss">
          <img src="./src/imgs/business.svg" alt="" width="100%" height="100%">
      </div>
    <div class="data-form">
        <form class="bnss-form" action="">
            <h1>Registro Empresa</h1>
            <label for="">Nombre de empresa:</label>
            <input type="text" name="name" value="" id="name" placeholder="Ingrese nombre de la empresa" onkeypress="return soloLetras(event);">
            <label for="">RUC:</label>
            <input type="text" name="ruc" value="" max="11" id="ruc" placeholder="Ingrese su ruc" onkeypress="return soloNumeros(event);">
            <label for="">Correo:</label>
            <input type="text" name="email" value="" id="email" placeholder="Ingrese correo" onkeyup="return validateEmail(this);">
            <small id="email-alert"></small>
            <label for="">Telefono:</label>
            <input type="text" name="phone" value="" id="phone" placeholder="Ingrese su numero de telefono" onkeypress="return soloNumeros(event);" >
            <label for="">Forma de pago:</label>
            <select class="" name="" id="typepay">
                <option value="0">PayPal</option>
                <option value="1">Efectivo</option>
                <option value="2">Otros</option>
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
            var ruc = document.getElementById('ruc').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var typepay = document.getElementById('typepay').value;
            if(name==""||ruc==""||email==""||phone==""){
                swal("Error!", "Debe ingresar todos los campos", "error");
                setTimeout(()=>{
                    console.log("sasa");
                },3000)
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
