<?php

session_destroy();
// Conexão com o banco de dados 
$conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
$db = mysqli_select_db($conexao, "id13007198_itander");

// Recupera o login 
$login = isset($_POST["user"]) ? addslashes(trim($_POST["user"])) : FALSE;

$sql2 = "UPDATE usuario set st_status = false WHERE email = '$login'";
        $resultado2 = mysqli_query($conexao, $sql2);

        if ($resultado2) {
            $numeroregistros = mysqli_affected_rows($conexao);
            $_SESSION["status"] = $dados["st_status"];
            header("Location: index.php");
        } else {
            echo "Falha ao executar comando";
        }
        mysqli_close($conexao);
        exit;