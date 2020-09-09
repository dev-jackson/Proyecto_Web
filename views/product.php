<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web</title>
    <link rel="shortcut icon" href="../src/imgs/pngwing.com.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/19e3965ce4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../src/css/generalStyle.css">
    <link rel="stylesheet" href="../src/css/darkMode.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<!--- actulizar la lista de imagenes con bd no de manera estatica--->
<body>
    <div class="container">
    <?php require_once 'static/header.html'?>
        <div class="container-cat">
            <section class="">
                <h1>Categorias</h1>
            </section>
            <section class="combo-cat">
                <div class="cat-products">
                    <label for="">Productos</label>
                    <select class="" name="">
                        <option value="0">Alimentos</option>
                        <option value="1">Juegos</option>
                        <option value="2">Electronica</option>
                    </select>
                </div>
                <div class="cat-business">
                    <label for="">Empresa</label>
                    <select class="" name="">
                        <option value="0">Alimentos</option>
                        <option value="1">Juegos</option>
                        <option value="2">Electronica</option>
                    </select>
                </div>
                <br>
                <br>
                <div class="ctn-btns">
                    <a href="../views/add_products.html" id="btnAddProduct">Agregar producto</a>
                    <a href="../views/business.html" id="btnAddProduct">Agregar empresa</a>
                </div>
            </section>
            <section class="items">
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
                <div class="cat-card">
                    <section class="card-img">
                        <img src="./src/imgs/aliment.jpg" alt="">
                    </section>
                    <section class="cat-title">
                        <h1>Title title</h1>
                    </section>
                </div>
            </section>
        </div>
        <footer>
            <div class="social">
                <ul>
                    <li><span class="face"><i class="fab fa-facebook" style="color: #325aaf;"></i></span></li>
                    <li><span><i class="fab fa-instagram insta" ></i></span></span></li>
                    <li><span><i class="fab fa-twitter twi" ></i></span></li>
                    <li><i class="fab fa-youtube you" ></i></li>
                </ul>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="dutys">
                <p>
                    <span>&copy; 2020 Project Web</span>
                </p>
            </div>
        </footer>
    </div>
    <script src="../src/js/index.js"></script>
</body>
</html>