<html>
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
                <form action="index.php" method="post" class="navbar-form navbar-right" role="form">                       
                    <input type="submit" class="btn btn-success" style="
                           margin-top: 15px;" id="sair" name="sair" value="Sair">
                </form>
            </div>
        </div>
    </nav>
</html>
<?php
if (isset($_POST['logn']) || isset($_POST["cadastra"]) || isset($_POST["altera"]) || isset($_POST["deleta"]) || isset($_POST["listar"])) {
    $email = $_POST["emaillogin"];
    $pass = $_POST["senhalogin"];
    $pold = $_POST["senhaold"];
} else {
    $email = '';
    $pass = '';
    $pold = '';
}

iF (session_status() != 2) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $pass;
}

if ($email !== '') {
    print_r("SEU E-MAIL: " . $email);
}

$existe_sessao = session_status() == PHP_SESSION_ACTIVE;

if ($pold == $pass && $existe_sessao == 2 && $pold != null) {
    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }
    echo "<html> <div style='text-align: center'> <h2 style='text-align: center'> Incluir </h2>
    <form name = 'cadastro' method = 'POST' action = 'produtos.php' id='aa'>
    Nome do Produto: <input type = 'text' name = 'nomeproduto' required>
    <input name='emaillogin' value='$email' hidden>  
    <input name='senhalogin' value='$pass' hidden>
    <input name='senhaold' value='$pold' hidden>
    <input name = 'cadastra' type = 'submit' value = 'Enviar'> <br>
    </form> </div>
    </html>";
    if (isset($_POST["cadastra"])) {
        $produtoNovo = $_POST["nomeproduto"];
        array_push($_SESSION['produtos'], $produtoNovo);
        print_r(array_values($_SESSION['produtos']));
    }

    echo "<html> <div style='text-align: center'> <h2 style='text-align: center'> Alterar </h2> <form name = 'altera' method = 'POST' action = 'produtos.php'>
    Informe a posição para alterar: <input type = 'number' name = 'posicao' required> 
    Informe o novo nome: <input type = 'text' name = 'novonome' required>
    <input name='emaillogin' value='$email' hidden>  
    <input name='senhalogin' value='$pass' hidden>
    <input name='senhaold' value='$pold' hidden>
    <input name = 'altera' type = 'submit' value = 'Enviar'> <br>
    </form> </div>
    </html>";

    if (isset($_POST["altera"])) {
        $produtoNovo = $_POST["posicao"];
        $novonome = $_POST['novonome'];
        $_SESSION['produtos'][$produtoNovo] = $novonome;
        print_r(array_values($_SESSION['produtos']));
    }

    echo "<html> <div style='text-align: center'> <h2 style='text-align: center'> Deletar </h2>
    <form name = 'remove' method = 'POST' action = 'produtos.php'>
    Informe a posição de delete: <input type = 'number' name = 'posicao' required>
    <input name='emaillogin' value='$email' hidden>  
    <input name='senhalogin' value='$pass' hidden>
    <input name='senhaold' value='$pold' hidden>
    <input name = 'deleta' type = 'submit' value = 'Enviar'> <br>
    </form></div> </html>";
    if (isset($_POST["deleta"])) {
        $posicao = $_POST['posicao'];
        echo "deletando item na posição: " . $posicao;
        var_dump($_SESSION['produtos']);
        unset($_SESSION['produtos'][$posicao]);
        var_dump($_SESSION['produtos']);
    }

    echo "<html> <div style='text-align: center'><h2 style='text-align: center'> Listar </h2><form name = 'listar' method = 'POST' action = 'produtos.php'>
    <input name='emaillogin' value='$email' hidden>  
    <input name='senhalogin' value='$pass' hidden>
    <input name='senhaold' value='$pold' hidden>
    <input name = 'listar' type = 'submit' value = 'Listar Produtos'></form></div>
    </html>";
    if (isset($_POST["listar"])) {
        print_r(array_values($_SESSION['produtos']));
        print_r(sizeof($_SESSION['produtos']));
    }
} else {
    echo "<html><h1 style='text-align: center'> Por favor, efetue login para acessar esta página </h1></html>"
    . "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
    <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
    session_destroy();
}