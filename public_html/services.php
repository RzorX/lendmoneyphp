<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> MoneyNow - Produtos e Serviços </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
        <div class="servicesinfo">
            <h2 align="center" class="servicestitle">
                <strong> Conheça os nossos tipos de empréstimos <br> disponíveis para você: </strong>
            </h2>
            <div class="col-md-4">
                <div class="teamservice">
                    <div class="team2services">
                        <picture class='teamphoto'>
                            <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                        </picture>
                    </div>
                </div>
                <h3 class="serviceemp"> Empréstimos para assalariados </h3>
                <p class="servicesvantagem_sub"></p>
            </div>
            <div class="col-md-4">
                <div class="teamservice">
                    <div class="team2services">
                        <picture class='teamphoto'>
                            <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                        </picture>
                    </div>
                </div>
                <h3 class="serviceemp"> Empréstimos para autônomos </h3>
                <p class="servicesvantagem_sub"></p>
            </div>
            <div class="col-md-4">
                <div class="teamservice">
                    <div class="team2services">
                        <picture class='teamphoto'>
                            <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                        </picture>
                    </div>
                </div>
                <h3 class="serviceemp"> Empréstimos para o setor público </h3>
                <p class="servicesvantagem_sub"></p>
            </div>
        </div>
        <div class="x">
            <div class="fazersimulacaoFservices">
                <button class="simular_emprestimo"
                        onclick="window.location = 'index.php'">
                    <strong> Simular Empréstimo </strong></button>
            </div>
        </div>
    </body>
</html>
