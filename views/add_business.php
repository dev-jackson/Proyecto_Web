<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <script src="./src/js/index.js" charset="utf-8"></script>
    <title>Add Business</title>
</head>

<body class="container-addbss">
    <div class="container-bnss">
        <div class="img-bnss">
            <img src="./src/imgs/business.svg" alt="">
    </div>
    <div class="data-form">
        <form class="bnss-form" action="">
            <h1>Registro Empresa</h1>
            <input type="text" name="name" value="" id="name" placeholder="Ingrese nombre de la empresa" onkeypress="return soloLetras(event);">
            <input type="text" name="ruc" value="" max="11" id="ruc" placeholder="Ingrese su ruc" onkeypress="return soloNumeros(event);">
            <input type="text" name="email" value="" id="email" placeholder="Ingrese correo" onkeyup="return validateEmail(this);">
            <small id="email-alert"></small>
            <input type="text" name="phone" value="" id="phone" placeholder="Ingrese su numero de telefono" onkeypress="return soloNumeros(event);" >
            <label for="">Forma de pago:</label>
            <select class="form-control" id="typepay">
                <option value="0">PayPal</option>
                <option value="1">Efectivo</option>
                <option value="2">Otros</option>
            </select>
            <img src="" id="img1" >
            <input type="file" name="" id="imgfile">
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
                    window.location.href = "index.php?a=pages&p=product";
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
                            text:"Si",
                            value:"si"
                        },
                        no:{
                            text:"No",
                            value:"no"
                        },
                    },
                })
                .then((value) => {
                switch (value) {
                    case "si":
                        window.location.href ="index.php?a=pages&p=product";
                        break;
                    case "no":
                        break;
            }
        })
}
    </script>
</html>
