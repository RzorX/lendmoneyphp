<html>
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
                <?php
                $id = $_GET['id'];
                $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
                $db = mysqli_select_db($conexao, "id13007198_itander");
                $sqlselect = "SELECT st_status,email FROM usuario WHERE st_status = 1 and adm = 0";
                $resultadoselect = mysqli_query($conexao, $sqlselect);

                if ($resultadoselect) {
                    while ($registro = mysqli_fetch_array($resultadoselect)) {
                        $_SESSION["status"] = $registro["st_status"];
                        $_SESSION["email"] = $registro["email"];
                        $user = $_SESSION["email"];
                    }
                }
                mysqli_close($conexao);

                $user = $_SESSION["email"];
                echo "<form action='desloga.php' method='post' class='navbar-form navbar-right' role='form'>
                    <input type='text' class='btn btn-success' style='
                           margin-top: 15px;' id='user' name='user' value='$user' disable>
                    <input type='submit' class='btn btn-success' style='
                           margin-top: 15px;' id='sair' name='sair' value='Sair'>
                </form>"
                ?>        
            </div>
        </div>
    </nav>
</html>
<?php
//if (isset($_POST['logn']) || isset($_POST["cadastra"]) || isset($_POST["altera"]) || isset($_POST["deleta"]) || isset($_POST["listar"])) {
//    $email = $_POST["emaillogin"];
//    $pass = $_POST["senhalogin"];
//    $pold = $_POST["senhaold"];
//} else {
//    $email = '';
//    $pass = '';
//    $pold = '';
//}
//iF (session_status() != 2) {
//    session_start();
//    $_SESSION['email'] = $email;
//    $_SESSION['senha'] = $pass;
//}
//if ($email !== '') {
//    print_r("SEU E-MAIL: " . $email);
//}
if ($_SESSION["status"] == 1) {

    echo "<div style='text-align: center;'><form action = '' name = 'f1' method = 'post'>
    <h3> Solicitar um novo empréstimo </h3>
    <p> Valor do empréstimo </p> <input type = 'number' name = 'valor' required>
    <input type = 'submit' name = 'inserir' value = 'Enviar'>
    </form></div>";
    if (isset($_POST["inserir"])) {
        $valor = $_POST["valor"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sql = "INSERT INTO emp_solicitacao (email,valor,stats) VALUES ('$user','$valor','Aguardando Aprovação')";
        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            $numeroregistros = mysqli_affected_rows($conexao);
            echo "Comando executado com sucesso";
            echo "Foram afetados $numeroregistros";
        } else {
            echo "Falha ao executar comando";
        }
        mysqli_close($conexao);
    }
    echo "<div style='text-align: center;'><form action='' name='f2' method='post'>
        <h3> Consultar empréstimos </h3>
        <input type='submit' name='consultar' value='Consultar por email'>
    </form></div>";
    if (isset($_POST["consultar"])) {
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sqlselect = "SELECT id,email,valor,stats FROM emp_solicitacao WHERE email = '$user'";
        $resultadoselect = mysqli_query($conexao, $sqlselect);
        if ($resultadoselect) {
            while ($registro = mysqli_fetch_array($resultadoselect)) {
                echo "<center> Código do Empréstimo: " . $registro["id"] . "</center><br>";
                echo "<center> Valor do Empréstimo: " . $registro["valor"] . "</center><br>";                
                echo "<center> Status do Empréstimo: " . $registro["stats"] . "</center><br>";
            }
        }
        mysqli_close($conexao);
    }
} else {
    echo "<html><h1 style='text-align: center'> Por favor, efetue login para acessar esta página </h1></html>"
    . "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
            <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
    session_destroy();
}