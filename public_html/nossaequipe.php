<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyNow - Nossa Equipe</title>
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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
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
                               width: 226px;">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Senha" class="form-control" style="
                               margin-top: 15px;">
                    </div>
                    <button type="submit" class="btn btn-success" style="
                            margin-top: 15px;">Entrar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="text-center container">
        <div class="equipe">
            <div class="a">
                <div class="b">
                    <picture class='fotos_equipe'>
                        <source type="image/png" srcset="img/equipe1.png">
                        <img src="img/equipe1.png" alt="Equipe 1">
                    </picture>
                </div>
            </div>
            <div class="description_equipe">
                <h2 class="equipe">Gleisson Timoteo Bezerra da Silva</h2>
                <p class="descricao">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui.
                </p>
            </div>
        </div>
        <div class="equipe">
            <div class="a">
                <div class="b">
                    <picture class='fotos_equipe'>
                        <source type="image/png" srcset="img/equipe2.png">
                        <img src="img/equipe2.png" alt="Equipe 2">
                    </picture>
                </div>
            </div>
            <div class="description_equipe">
                <h2 class="equipe">Lucas Luigi Tremaroli</h2>
                <p class="descricao">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,tortor
                    mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    molliseuismod. Donec sed odio dui.
                </p>
            </div>
        </div>
        <div class="equipe">
            <div class="a">
                <div class="b">
                    <picture class='fotos_equipe'>
                        <source type="image/png" srcset="img/equipe3.png">
                        <img src="img/equipe3.png" alt="Equipe 3">
                    </picture>
                </div>
            </div>
            <div class="description_equipe">
                <h2 class="equipe">Nathalia Abramson Friederichs</h2>
                <p class="descricao">
                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                    commodo,tortormauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                    malesuada magna molliseuismod.Donec sed odio dui.
                </p>
            </div>
        </div>
    </div>
    <div class="text-center container">
        <div class="voltar">
            <button class="voltar" onclick="window.location = 'index.php'"><strong> Voltar </strong></button>
        </div>
    </div>
    <footer>
        <p>&copy; Company 2015</p>
    </footer>
</body>

</html>
