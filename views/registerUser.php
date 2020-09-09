<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../src/imgs/pngwing.com.png" type="image/x-icon">
        <script src="" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./src/css/generalStyle.css">
        <title>Project Web</title>
    </head>
    <body>
        <div class="container-register" id="container-login">
            <div class="login" id="login">
                <form class="form-login" action="" id="register">
                    <h2>Inicia session</h2>
                    <div class="input-icon">
                    <i class="far fa-address-card"></i>
                        <input type="text" class="text" name="id" value="" placeholder="Ingrese Cedula" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="text" name="firts_name" value="" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="text" name="last_names" value="" placeholder="Ingrese sus apellidos" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-key"></i>
                        <input type="text" class="text" name="password" value="" placeholder="Ingrese clave" required>
                    </div>
                        <input type="submit" name="button1" class="btnAcceso" value="Registrarse">
                </form>
            </div>
        </div>
        <!---<script src="./src/js/index.js"></script>--->
        <script>
            $(document).ready(function(){
                $('#register').on('submit',(e)=>{
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'index?c=Usuario&a=registerUsuario',
                        async: true,
                        data: $('#register').serialize(),
                        beforeSend: () => {

                        },
                        success: (res) => {
                            if(res){
                                swal(
                                    "Usuario registrado",
                                    "Registro Existoso",
                                    "success"
                                );
                            }else{

                            }
                        },
                        error: (err) => {
                            console.log(err);
                        }
                    });
                })
            });
        </script>
    </body>
</html>
