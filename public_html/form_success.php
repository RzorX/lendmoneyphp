<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Itander </title>
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

        <?php
        require "conectaBD.php";

        $nome = isset($_POST["name"]);
        $cpf = isset($_POST["cpf"]);
        $rg = isset($_POST["rg"]);
        $email = isset($_POST["email"]);
        $pass = isset($_POST["cel"]);
        $cel = isset($_POST["cel"]);
        $fixo = isset($_POST["fixo"]);
        $genero = isset($_POST["genero"]);
        $nasc = isset($_POST["nasc"]);
        $cep = isset($_POST["cep"]);
        $end = isset($_POST["end"]);
        $num = isset($_POST["num"]);
        $bairro = isset($_POST["bairro"]);
        $state = isset($_POST["state"]);
        $city = isset($_POST["city"]);
        $comp = isset($_POST["comp"]);
        $bank = isset($_POST["bank"]);
        $ag = isset($_POST["ag"]);
        $conta = isset($_POST["conta"]);
        $dig = isset($_POST["dig"]);
        $tyoe = isset($_POST["type"]);


        $SQLInsertuser = "insert into usuario (nome,login,senha,cpf,rg,cel,fixo,genero,data_nascimento) values ('.$nome','.$login','.$senha','.$cpf','.$rg','.$cel','.$fixo','.$genero','.$nasc');";
        mysqli_execute($SQLInsertuser);
        $SQLInsertend = "insert into usuario_endereco (id_usuario,cep,endereco,num,comp) values ('','.$cep','.$end','.$num','.$comp');";
        mysqli_execute($SQLInsertend);
        $SQLInsertbank = "insert into usuario_banco (id_usuario,banco,conta,dig,tipo_conta) values ('','.$bank','.$conta','.$dig','.$tyoe');";
        mysqli_execute($SQLInsertbank);
        ?>
        <a name="home"></a>
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
                                srcset="img/itander-logo-only.png 320w,
                                img/itander-logo-only.png 480w,
                                img/itander-logo-only.png 800w,
                                img/itander-logo-only.png 1000w"
                                sizes="(max-width: 320px) 280px,
                                (max-width: 480px) 440px,
                                800px"
                                src="img/itander-logo-only.png" alt="Empréstimos online">
                        </a></p>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <button type="submit" class="btn btn-success" style="
                                margin-top: 15px;">Minha Conta</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="cadastrosucesso">
            <h3 class="infocad" style=" text-align: center;
                margin-top: 100px;
                color: black;">
                Ficamos felizes por ter você aqui!!
            </h3>
            <div class="text-center container">
                <div class="voltar">
                    <button class="voltarcad" onclick="window.location = 'index.php'"><strong> Simular um Empréstimo </strong></button>
                </div>
            </div>
        </div>

    </body>
</html>
