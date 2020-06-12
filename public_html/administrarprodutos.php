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
                <?php
                $id = $_GET['id'];
                $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
                $db = mysqli_select_db($conexao, "id13007198_itander");
                $sqlselect = "SELECT st_status,email,adm FROM usuario WHERE st_status = 1 and adm = 1";
                $resultadoselect = mysqli_query($conexao, $sqlselect);

                if ($resultadoselect) {
                    while ($registro = mysqli_fetch_array($resultadoselect)) {
                        $_SESSION["status"] = $registro["st_status"];
                        $_SESSION["email"] = $registro["email"];
                        $_SESSION["adm"] = $registro["adm"];
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
if ($_SESSION["status"] == 1 && $_SESSION["adm"] == 1) {
    $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
    $db = mysqli_select_db($conexao, "id13007198_itander");
    $sqlselect2 = "SELECT id,email,valor,stats FROM emp_solicitacao";
    $resultadoselect2 = mysqli_query($conexao, $sqlselect2);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center><h3> Todos os empréstimos solicitados </h3></center>";
    echo "<div style='text-align: center;'>";
    echo "<center><form name='f1' method='post'/></center>";
    echo "<center><table border=0></center>";
    echo "<center><tr></center>";
    echo "<center><td>ID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></center>";
    echo "<center><td> EMAIL </td> </center>";
    echo "<center><td> Valor </td> </center>";
    echo "<center><td> Status </td> </center>";
    echo "<center><td> Aprovar </td> </center>";
    echo "<center><td> Rescusar </td> </center>";
    echo "<center><td> Excluir </td> </center>";
    echo "</tr>";
    if ($resultadoselect2) {
        while ($registro2 = mysqli_fetch_array($resultadoselect2)) {
            echo "<tr>";
            echo "<td>" . $registro2["id"] . "</td>";
            echo "<td>" . $registro2["email"] . "</td>";
            echo "<td>" . $registro2["valor"] . "</td>";
            echo "<td>" . $registro2["stats"] . "</td>";
            echo "<td><form name='aprova' method='post'><input type='submit' name='aprova' id='aprova' value='" . $registro2["id"] . "'></td></form>";
            echo "<td><form name='recusa' method='post'><input type='submit' name='recusa' id='recusa' value='" . $registro2["id"] . "'></td></form>";
            echo "<td><form name='exclui' method='post'><input type='submit' name='exclui' id='exclui' value='" . $registro2["id"] . "'</td></form>";
        } echo "</tr>";
    }
    echo "</table>";
    if (isset($_POST['aprova'])) {
        $cod = $_POST['aprova'];
        $sql2 = "UPDATE emp_solicitacao set stats = 'Aprovado' WHERE id = $cod";
        $resultado2 = mysqli_query($conexao, $sql2);
        if ($resultado2) {
            echo "<p><center> Emprestimo Aprovado </center></p>";
            echo "<script>window.location='administrarprodutos.php'</script>";
        } else {
            echo "Falha ao executar comando $cod";
        }
    }
    if (isset($_POST['recusa'])) {
        $cod = $_POST['recusa'];
        $sql1 = "UPDATE emp_solicitacao set stats = 'Recusado' WHERE id = $cod";
        $resultado1 = mysqli_query($conexao, $sql1);
        if ($resultado1) {
            echo "<p><center> Emprestimo Recusado </center></p>";
            echo "<script>window.location='administrarprodutos.php'</script>";
        } else {
            echo "Falha ao executar comando $cod";
        }
    }
    if (isset($_POST['exclui'])) {
        $cod = $_POST['exclui'];
            $sql3 = "DELETE FROM emp_solicitacao WHERE id = $cod";
            $resultado3 = mysqli_query($conexao, $sql3);
            if ($resultado3) {
                echo "<p><center> Emprestimo Alterado </center></p>";
                echo "<script>window.location='administrarprodutos.php'</script>";
            } else {
                echo "Falha ao executar comando $cod";
            }     
    }
    mysqli_close($conexao);
} else {
    echo "<html><h1 style='text-align: center'> Por favor, efetue login para acessar esta página </h1></html>"
    . "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
            <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
    session_destroy();
}    
?>
<?php if ($_SESSION["status"] == 1 && $_SESSION["adm"] == 1) {
     echo "<center><h3> Incluir Empréstimo </h3></center>";
     echo "<div style='text-align: center;'><form name='incluiradm' method = 'post'>
    <p> Valor do empréstimo </p> <input type='text' name='valoradm' required>
    <p> Email do solicitante </p> <input type='text' name='emailsolicitante' required>
    <input type= 'submit' name='incluiradm' value ='Incluir'>
    </form></div>";
     
     if (isset($_POST["incluiradm"])) {
        $valoradm = $_POST["valoradm"];
        $emailsolicitante = $_POST["emailsolicitante"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sqladm = "INSERT INTO emp_solicitacao (email,valor,stats) VALUES ('$emailsolicitante','$valoradm','Aguardando Aprovação')";
        $resultadoadm = mysqli_query($conexao, $sqladm);

        if ($resultadoadm) {
            $numeroregistros = mysqli_affected_rows($conexao);
            echo "Comando executado com sucesso";
            echo "<script>window.location='administrarprodutos.php'</script>";
        } else {
            echo "Falha ao executar comando";
        }
        mysqli_close($conexao);
    }
} else {
    echo "<html><h1 style='text-align: center'> Por favor, efetue login para acessar esta página </h1></html>"
    . "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
            <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
    session_destroy();
}    