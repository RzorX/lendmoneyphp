<?php

        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sqlselect = "SELECT id,st_status,email FROM usuario WHERE st_status = 1 and adm = 0";
        $sqlselect2 = "SELECT id,st_status,email FROM usuario WHERE st_status = 1 and adm = 1";
        $resultadoselect = mysqli_query($conexao, $sqlselect);
        $resultadoselect2 = mysqli_query($conexao, $sqlselect2);

        if ($resultadoselect) {
            while ($registro = mysqli_fetch_array($resultadoselect)) {
                echo "<script> alert('Você já está logado!!'); </script>";
                $_SESSION["id"] = $registro["id"];
                $id = $_SESSION["id"];
                echo "<script>window.location='produtos.php'</script>";
            }
            } else {
                echo "<script> alert('Falha ao executar comando'); </script>";
            }
            if ($resultadoselect2) {
            while ($registro2 = mysqli_fetch_array($resultadoselect2)) {
                echo "<script> alert('Você já está logado!!'); </script>";
                $_SESSION["id"] = $registro2["id"];
                $id = $_SESSION["id"];
                echo "<script>window.location='administrarprodutos.php'</script>";
            }
            } else {
                echo "<script> alert('Falha ao executar comando'); </script>";
            }
            mysqli_close($conexao);
?>
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
        if (isset($_POST['criarconta'])) {
            $nome = $_POST["name"];
            $cpf = $_POST["cpf"];
            $rg = $_POST["rg"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            $cel = $_POST["cel"];
            $fixo = $_POST["fixo"];
            $genero = $_POST["genero"];
            $nasc = $_POST["nasc"];
            $cep = $_POST["cep"];
            $end = $_POST["end"];
            $num = $_POST["num"];
            $bairro = $_POST["bairro"];
            $state = $_POST["state"];
            $city = $_POST["city"];
            $comp = $_POST["comp"];
            $bank = $_POST["bank"];
            $ag = $_POST["ag"];
            $conta = $_POST["conta"];
            $dig = $_POST["dig"];
            $tyoe = $_POST["type"];

            $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
            $db = mysqli_select_db($conexao, "id13007198_itander");
            $sql = "INSERT INTO usuario (nome,email,senha,celular,adm) VALUES ('$nome','$email',aes_encrypt('$pass','UAM'),'$cel',false)";
            $resultado = mysqli_query($conexao, $sql);

            if ($resultado) {
                $numeroregistros = mysqli_affected_rows($conexao);
                echo "Comando executado com sucesso";
                echo "Foram afetados $numeroregistros";
            } else {
                echo "Falha ao executar comando";
            }
            mysqli_close($conexao);
        } else {
            $nome = '';
            $cpf = '';
            $rg = '';
            $email = '';
            $pass = '';
            $cel = '';
            $fixo = '';
            $genero = '';
            $nasc = '';
            $cep = '';
            $end = '';
            $num = '';
            $bairro = '';
            $state = '';
            $city = '';
            $comp = '';
            $bank = '';
            $ag = '';
            $conta = '';
            $dig = '';
            $tyoe = '';
        }
        ?>
        <a name="home"></a>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class = "sr-only">Toggle navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <p align = "center">
                        <a class = "navbar-brand" href = "#" onclick = "window.location = 'index.php'">
                            <img
                                srcset = "img/itander-logo-only.png 320w,
                                img/itander-logo-only.png 480w,
                                img/itander-logo-only.png 800w,
                                img/itander-logo-only.png 1000w"
                                sizes = "(max-width: 320px) 280px,
                                (max-width: 480px) 440px,
                                800px"
                                src = "img/itander-logo-only.png" alt = "Empréstimos online">
                        </a></p>
                </div>
                <div id = "navbar" class = "navbar-collapse collapse">
                    <form class = "navbar-form navbar-right" role = "form">
                        <a class="btn btn-primary" href="form.php" role="button" style="margin-top: 15px;"
                               id="cadastrar">Cadastrar</a>
                    </form>
                </div>
            </div>
        </nav>

        <div class = "login1" style = "text-align: center; margin-top: 100px">

            <h3>É um prazer tê-lo conosco :) </h3>
            <p> Acesse sua seção </p>
            <form action = 'login_valida.php' method = 'post'>
                <h3 class = 'telalogin'> Login
                    <input type = 'text' name = 'emaillogin' required>
                </h3>
                <h3 class = 'inputsenha'> Senha
                    <input type = 'password' name = 'senhalogin' id = 'senhalogin' required>
                </h3>;
                <input class = 'btn btn-primary' name = 'logn' type = 'submit' role = 'button' value = 'Entrar'>
                </div>
            </form>

    </body>
</html>
