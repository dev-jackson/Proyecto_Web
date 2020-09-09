<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../src/imgs/pngwing.com.png" type="image/x-icon">
        <script src="" crossorigin="anonymous"></script>
        <title>Project Web</title>
        <style>
            .btnRegister{
                background-color: black;
                margin: 15px;
                padding: 10px;
            }
            .container-login{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container-login" id="container-login">
            <div class="login" id="login">
                <a href="#" id="btn-cerrar-login" class="btn-cerrar-login"><i class="fast fa-time"></i></a>
                <form class="form-login" action="index.html" method="post">
                    <h2>Inicia session</h2>
                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" class="text" name="" value="" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="input-icon">
                        <i class="fas fa-key"></i>
                        <input type="text" class="text" name="" value="" placeholder="Ingrese clave" required>
                    </div>
                        <input type="submit" name="button1" class="btnAcceso" value="Ingresar">
                        <span>o</span>
                        <a href="index.php?a=pages&p=registerUser" class="btnRegister">Registrarse</a>
                    <br>
                    <br>
                    <p><a href="#">¿Olvidaste tu contraseña?</a></p>
                </form>
            </div>
        </div>
        <script src="../src/js/index.js"></script>
    </body>
</html>
