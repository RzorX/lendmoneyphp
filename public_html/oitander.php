<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> O MoneyNow </title>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="All">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="All">
        <link rel="stylesheet" href="css/main.css" media="All">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p align= "center">
                        <a class="navbar-brand" href="#" onclick="window.location = 'index.php'">
                            <img
                                srcset="img/money-now-white.png 320w,
                                img/money-now-white.png 480w,
                                img/money-now-white.png 800w,
                                img/money-now-white.png 1000w"
                                sizes="(max-width: 420px) 380px,
                                (max-width: 580px) 540px,
                                1500px"
                                src="img/itander-logo-only.png" alt="Empréstimos online">
                        </a></p>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control" style="
                                   margin-top: 15px;
                                   width: 226px;" id="login">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Senha" class="form-control" style="
                                   margin-top: 15px;" id="pass">
                        </div>
                        <button type="submit" class="btn btn-success" style="
                                margin-top: 15px;">Entrar</button>
                        <div class="form-group">
                            <a class="btn btn-primary" href="form.php" role="button" style="margin-top: 15px;">Cadastrar</a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mission-class">
                        <h1 class="mis">Missão</h1>
                    </div>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="col-md-4">
                    <div class="mission-class">
                        <h1 class="mis">Visão</h1>
                    </div>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="col-md-4">
                    <div class="mission-class">
                        <h1 class="mis">Valores</h1>
                    </div>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
            <div class="ondeestamos">
                <h1 class="end"> Nossa Localização </h1>
            </div>
            <div class="mapa" id="mapa"></div>
            <h3 class="listend"> R. Casa do Ator, 275 <br> Vila Olímpia <br> São Paulo - SP <br> 04546-001 </h3>
            <script>
                function inicializar() {
                    var coordenadas = {lat: -23.600069, lng: -46.676961};
                     
                    var mapa = new google.maps.Map(document.getElementById('mapa'), {
                        zoom: 15,
                        center: coordenadas
                    });

                    var marker = new google.maps.Marker({
                        position: coordenadas,
                        map: mapa,
                        title: 'Meu marcador'
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzJ3UD8F_WY1M__cV41P_LcEaThfrNEaQ&callback=inicializar">
            </script>
        </div>

        <hr>

        <footer>
            <p>&copy; Company 2015</p>
        </footer>

    </body>

</html>
