<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> MoneyNow </title>
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
        if (isset($_POST['sair'])) {
            session_start();
            session_destroy();
        }
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
                    <form action="entrar.php" method="post" class="navbar-form navbar-right" role="form">                       
                        <input type="submit" class="btn btn-success" style="
                               margin-top: 15px;" id="entrar" name="envia" value="Entrar">
                        <div class="form-group" id="cadastrardiv">
                            <a class="btn btn-primary" href="form.php" role="button" style="margin-top: 15px;"
                               id="cadastrar">Cadastrar</a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="home">
            <h1 class="title">Te apoiando quando você mais precisa somos a <strong>PlanoB</strong></h1>
            <h2 class="subtitle" style="font-size:21px"> Plataforma social que facilita investimentos entre empresas e universitários </h2>
        </div>
        <div class="sub">
            <strong><font color="black" id="parc">Vem com a gente!!</font></strong>
        </div>  
        <div class="valores_emp" id="valempresitmo">
            <div class="valores_button">
                <div class="botao">
                    <button class="valores1" type="button" onclick="calcparcelas(value)"
                            id="10k" value="R$10.000"><strong> Preciso de Apoio </strong></button>
                </div>
                <div class="botao">
                    <button class="valores1" type="button" onclick="calcparcelas(value)"
                            id="20k" value="R$20.000"><strong> Patrocine um talento </strong></button>
                </div>
                </div>
            </div>
        </div>

        <div class="valores_emp" id="parcempresitmo">
            <div class="valores_button">
                <div class="botao">
                    <button class="valores1" type="button" data-toggle="modal" data-target="#solicitaemprestimo"
                            onclick="enviaparc(value)"
                            id="6x" value="6x"><strong> 6X </strong></button>
                </div>
                <div class="botao">
                    <button class="valores1" type="button" data-toggle="modal" data-target="#solicitaemprestimo"
                            onclick="enviaparc(value)"
                            id="8x" value="8x"><strong> 8X </strong></button>
                </div>
                <div class="botao">
                    <button class="valores1" type="button" data-toggle="modal" data-target="#solicitaemprestimo"
                            onclick="enviaparc(value)"
                            id="12x" value="12x"><strong> 12X </strong></button>
                </div>
                <div class="valores1_button" style="
                     margin-bottom: 0px;">
                    <div class="botao">
                        <button class="valores1" type="button" data-toggle="modal" data-target="#solicitaemprestimo"
                                onclick="enviaparc(value)"
                                id="16x" value="16x"><strong> 16X </strong></button>
                    </div>
                    <div class="botao">
                        <button class="valores1" type="button" data-toggle="modal" data-target="#solicitaemprestimo"
                                onclick="enviaparc(value)"
                                id="24x" value="24x"><strong> 24X </strong></button>
                    </div>
                    <div class="botao">
                        <button class="valores1" type="button" onclick="voltar()"
                                id="back_value"><strong> Voltar </strong></button>
                    </div>
                </div>
            </div>
        </div>

        <p class="escolhido" id="escolhidos"></p>

        <div class="infos">
            <h2 align="center" class="infostitle">
                <strong>As vantagens de se cadastrar na PlanoB</strong>
            </h2>
            <div class="vantagens">
                <div class="a">
                    <div class="b">
                        <picture class='fotos'>
                            <source type="image/webp" srcset="img/vantagem_1.webp">
                            <source type="image/png" srcset="img/vantagem_1.png">
                            <img src="img/vantagem_1.png" alt="Dinheiro na conta em até 1 dia útil">
                        </picture>
                    </div>
                </div>
                <div class="description_img">
                    <h3 class="emp">Dinheiro rápida na sua conta</h3>
                    <p class="vantagem_sub">Em até 24h após a aprovação do contrato.</p>
                </div>
            </div>
            <div class="vantagens">
                <div class="a">
                    <div class="b">
                        <picture class='fotos'>
                            <source type="image/webp" srcset="img/vantagem_2.webp">
                            <source type="image/png" srcset="img/vantagem_2.png">
                            <img src="img/vantagem_2.png" alt="Empréstimo sem garantia">
                        </picture>
                    </div>
                </div>
                <div class="description_img">
                    <h3 class="emp">Empréstimo sem garantia</h3>
                    <p class="vantagem_sub">Fique tranquilo: não pedimos seus bens.</p>
                </div>
            </div>
            <div class="vantagens">
                <div class="a">
                    <div class="b">
                        <picture class='fotos'>
                            <source type="image/webp" srcset="img/vantagem_3.webp">
                            <source type="image/png" srcset="img/vantagem_3.png">
                            <img src="img/vantagem_3.png" alt="Parcelamento de 12 a 36 meses">
                        </picture>
                    </div>
                </div>
                <div class="description_img">
                    <h3 class="emp">Parcelamento de 12 a 36 meses</h3>
                    <p class="vantagem_sub">Você decide em quantas vezes quer pagar.</p>
                </div>
            </div>
            <div class="vantagens">
                <div class="a">
                    <div class="b">
                        <picture class='fotos'>
                            <source type="image/webp" srcset="img/vantagem_4.webp">
                            <source type="image/png" srcset="img/vantagem_4.png">
                            <img src=".png" alt="40 dias para começar a pagar">
                        </picture>
                    </div>
                </div>
                <div class="description_img">
                    <h3 class="emp">40 dias para começar a pagar</h3>
                    <p class="vantagem_sub">A primeira parcela é só depois de 40 dias.</p>
                </div>
            </div>

            <div class="fazersimulacaoF">
                <a class="simular_emprestimo"  href="#home" role="button"> Simule um empréstimo </a>
            </div>
        </div>

        <div class="aboutus">
            <div class="us">
                <h1 class="itander"> O MoneyNow </h1>
                <h2 class="slogan">Mudando o mercado de<br> empréstimo pessoal no Brasil</h2>
                <p class="about">
                    Lançado em 2020, o MoneyNow entra no mercado de forma promissora com empréstimos 100% online no Brasil.
                </p>
                <p class="about2">
                    Com tecnologia de ponta e uma metodologia própria de avaliação, oferecemos uma solução simples, rápida e econômica, que prioriza a experiência de nossos clientes e permite que cada vez mais pessoas possam fazer um empréstimo pessoal seguro, com mais conveniência e menos burocracia.
                </p>
                <div class="about3">
                    <a class="Conheca"  href="oitander.php" role="button" onclick="window.location = 'oitander.php'"> Conheça o MoneyNow </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team">
                        <div class="team2">
                            <picture class='teamphoto'>
                                <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                            </picture>
                        </div>
                    </div>
                    <p> Um pouco sobre os idealizadores do site, gostaria de nos conhecer melhor? clique no link abaixo, ficamos felizes em te contar um pouco sobre a gente :) . </p>
                    <p class="tq"><a class="nossa-equipe" href="nossaequipe.php" role="button" onclick="window.location = 'nossaequipe.php'"> Nossa equipe </a></p>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <div class="team2">
                            <picture class='teamphoto'>
                                <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                            </picture>
                        </div>
                    </div>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p class="tq"><a class="nossa-equipe" href="services.php" role="button" onclick="window.location = 'services.php'"> Produtos & Serviços </a></p>
                </div>
                <div class="col-md-4">
                    <div class="team">
                        <div class="team2">
                            <picture class='teamphoto'>
                                <img class="photo" src="img/equipe_edited.jpg" alt="Nossa equipe">
                            </picture>
                        </div>
                    </div>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo.</p>
                    <p class="tq"><a class="nossa-equipe" href="#" role="button"
                                     data-toggle="modal" data-target="#exampleModal" data-whatever="@itander"
                                     >Mande sua mensagem</a></p>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fale conosco</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Seu nome:</label>
                                    <input type="text" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">E-mail:</label>
                                    <input type="text" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Mensagem:</label>
                                    <textarea class="form-control" id="message-text" required></textarea>
                                </div>
                        </div>
                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-primary" id="enviarmensagem" name="enviarmensagem"
                                   role="button" value="Enviar">
                        </div>
                        </form>
                        <?php
                        if (isset($_POST['enviarmensagem'])) {
                            echo "<script> alert('Mensagem enviada com sucesso!!') </script>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="solicitaemprestimo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="solicitaemprestimoLabel"><strong>PREENCHA OS CAMPOS ABAIXO
                                    E SIMULE SEM COMPROMISSO.</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="form_emp">
                            <form method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">CPF</label>
                                    <input type="text" class="form-control" id="cpf" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Valor desejado</label>
                                    <input type="text" class="form-control" id="valoremp" name="valoremp" disabled>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="qtdparc_emp" disabled>
                                        <option value="">Quantidade de parcelas</option>
                                        <option value="6x"> 6x </option>
                                        <option value="8x"> 8x </option>
                                        <option value="12x"> 12x </option>
                                        <option value="16x"> 16x </option>
                                        <option value="24x"> 24x </option>
                                    </select>
                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <input type="submit" class="btn btn-primary" id="simularmodal" name="simularmodal"
                                           role="button" value="Simular">
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['simularmodal'])) {
                                $user = $_POST["email"];
                                $valor = $_POST["valoremp"];               
                                $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
                                $db = mysqli_select_db($conexao, "id13007198_itander");
                                $sqlselect = "SELECT st_status,email,adm FROM usuario WHERE st_status = 1 and email = '$user'";
                                $resultadoselect = mysqli_query($conexao, $sqlselect);
                                if ($resultadoselect) {
                                    while ($registro = mysqli_fetch_array($resultadoselect)) {
                                        $_SESSION["status"] = $registro["st_status"];
                                        $_SESSION["email"] = $registro["email"];
                                        $_SESSION["adm"] = $registro["adm"];
                                    }
                                    if ($_SESSION["status"] == 1) {
                                        echo "<script> alert('Empréstimo solicitado com sucesso!!') </script>";
                                        $sql = "INSERT INTO emp_solicitacao (email,valor,stats) VALUES ('$user','$valor','Aguardando Aprovação')";
                                        $resultado = mysqli_query($conexao, $sql);
                                        mysqli_close($conexao);
                                        echo "<script>window.location='produtos.php'</script>";
                                    } else {
                                        echo "<script> alert('Necessário fazer login/cadastrar!!') </script>";
                                        echo "<script>window.location='entrar.php'</script>";
                                    }
                                }
                                mysqli_close($conexao);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="solicitaemprestimo_value" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="solicitaemprestimoLabel"><strong>PREENCHA OS CAMPOS ABAIXO
                                    E SIMULE SEM COMPROMISSO.</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="form_emp">
                            <form method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email1" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">CPF</label>
                                    <input type="text" class="form-control" id="cpf" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Valor desejado</label>
                                    <input type="text" class="form-control" id="valor" name="valor1" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="qtdparc" required>
                                        <option value="">Quantidade de parcelas</option>
                                        <option value="6X"> 6x </option>
                                        <option value="8X"> 8x </option>
                                        <option value="12X"> 12x </option>
                                        <option value="16X"> 16x </option>
                                        <option value="24X"> 24x </option>
                                    </select>
                                </div>
                                <div class="modal-footer" style="text-align: center;">
                                    <input type="submit" class="btn btn-primary" id="simularmodal" name="simularmodal2"
                                           role="button" value="Simular">                                
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['simularmodal2'])) {
                                $user = $_POST["email1"];
                                $valor = $_POST["valor1"];
                                $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
                                $db = mysqli_select_db($conexao, "id13007198_itander");
                                $sqlselect = "SELECT st_status,email,adm FROM usuario WHERE st_status = 1 and email = '$user'";
                                $resultadoselect = mysqli_query($conexao, $sqlselect);
                                if ($resultadoselect) {
                                    while ($registro = mysqli_fetch_array($resultadoselect)) {
                                        $_SESSION["status"] = $registro["st_status"];
                                        $_SESSION["email"] = $registro["email"];
                                        $_SESSION["adm"] = $registro["adm"];
                                    }
                                    if ($_SESSION["status"] == 1) {
                                        echo "<script> alert('Empréstimo solicitado com sucesso!!') </script>";
                                        $sql = "INSERT INTO emp_solicitacao (email,valor,stats) VALUES ('$user','$valor','Aguardando Aprovação')";
                                        $resultado = mysqli_query($conexao, $sql);
                                        mysqli_close($conexao);
                                        echo "<script>window.location='produtos.php'</script>";
                                    } else {
                                        echo "<script> alert('Necessário fazer login/cadastrar!!') </script>";
                                        echo "<script>window.location='entrar.php'</script>";
                                    }
                                }
                                mysqli_close($conexao);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Company 2015</p>
            </footer>
        </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script type="text/javascript">
                        document.getElementById("parcempresitmo").hidden = true;
                        document.getElementById("aceitocondições").disabled = true;
                        document.getElementById("empsolicitado").hidden = true;
                        document.getElementById("logado").hidden = true;
        </script>
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
