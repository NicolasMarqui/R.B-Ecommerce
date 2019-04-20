<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzaria Nova Aliança</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="mainContainer">
        <header>
            <?php include 'pages/nav.php'?>
            <?php include 'pages/categorias.php'?>    
        </header>
        <section>
            <div class="section section-1">
                <?php include 'pages/hero.php'?>
            </div>
        </section>
        <section>
            <div class="section section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 ">
                            <div class="contentSec2">
                                <h2>Qualidade além da <span>Compra</span> </h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab error distinctio at placeat excepturi quo doloremque ipsa, veritatis fugit dolore!</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-in-block">
                            <div class="centerDIV">
                                <h3>Últimos <span>Produtos</span></h3>
                                <div class="displayNewProduto">
                                    <img src="https://images.pexels.com/photos/2120127/pexels-photo-2120127.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940.jpg" alt="new" class="" height="400px" width="auto">
                                    <div class="info">
                                        <h1>Roupa</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sapiente temporibus odit aspernatur perspiciatis quae ad officiis architecto, reprehenderit et veniam, repudiandae voluptatem culpa maxime laborum ducimus voluptates nemo tempora.</p>
                                    </div>
                                    <br>
                                    <a href="#">Comprar</a>
                                    <a href="produtos?all=true">Ver Todos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="section section-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="item">
                                <div class="tbl">
                                    <div class="tbl-cell">
                                        <i class="fab fa-facebook fa-4x"></i>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="item">
                                <div class="tbl">
                                    <div class="tbl-cell">
                                        <i class="fab fa-instagram fa-4x"></i>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="item">
                                <div class="tbl">
                                    <div class="tbl-cell">
                                        <i class="fab fa-twitter fa-4x"></i>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="section section-4">

            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>