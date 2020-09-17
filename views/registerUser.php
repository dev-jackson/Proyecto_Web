<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../src/imgs/pngwing.com.png" type="image/x-icon">
        <script src="" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./src/css/generalStyle.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <title>Project Web</title>
    </head>
    <body>
        <div class="container-register" id="container-login">
            <div class="login" id="login">
                <form class="form-login" action="" id="register">
                    <h2>Inicia session</h2>
                    <div class="input-icon">
                    <i class="far fa-address-card"></i>
                        <input type="text" class="text" name="ci" id="ci" value="<?php if(isset($u)) echo $u->getCi(); ?>" maxlength="10" placeholder="Ingrese Cedula" onkeypress="return validateCI(event);" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-user"></i> 
                        <input type="text" class="text" name="firts_name" value="<?php if(isset($u)) echo $u->getFirstName();?>" placeholder="Ingrese sus nombres" onkeypress="return soloLetras(event);" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="text" name="last_name" value="<?php if(isset($u)) echo $u->getLastName();?>" placeholder="Ingrese sus apellidos" onkeypress="return soloLetras(event);" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-key"></i>
                        <input type="text" class="text" name="password" value="" placeholder="Ingrese clave" required>
                    </div>
                        <input type="submit" name="button1" class="btnAcceso" value="Registrarse">
                </form>
            </div>
        </div>
        <script src="src/js/index.js"></script>
        <script>
            function validateCI(e){
                var ci = document.getElementById('ci');
                prttCi = /^([0-9]{9})$/;
                if(prttCi.test(ci.value)){
                    ci.style.outlineColor = "blue";
                    
                }else{
                    ci.style.outlineColor = 'red';
                    
                }
            }
            $(document).ready(function(){
                $('#register').on('submit',(e)=>{
                    e.preventDefault();
                    console.log($('#register').serialize());
                    $.ajax({
                        type: 'POST',
                        url: 'index.php?c=User&a=registerUser',
                        async: true,
                        data: $('#register').serialize(),
                        beforeSend: () => {
                            
                        },
                        success: (res) => {
                            console.log(res);
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
