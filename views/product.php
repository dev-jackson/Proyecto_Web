<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Web</title>
    <link rel="shortcut icon" href="../src/imgs/pngwing.com.png" type="image/x-icon">

</head>
<!--- actulizar la lista de imagenes con bd no de manera estatica--->

<body>
<?php require_once 'static/header.html'?>
    <div class="container">
            <br>
            <br>
            <br>
            <section class="">
                <h1>Categorias</h1>
            </section>
        <br>
        <br>
        <section class="items-admin">
        <div class="option-items">
                <div class="types-p">
                        
                </div>
                <div class="search-p">

                </div>
                <hr>
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
        <?php require_once('./views/static/footer.html'); ?>
    </div>
    <script src="../src/js/index.js"></script>
</body>

</html>