    <?php

    $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME") or print(mysqli_error());
    $db = mysqli_select_db($conexao, "id13007198_itander") or print (mysqli_error($conexao));
    session_start();
    $login = $_POST["emaillogin"] ? addslashes(trim($_POST["emaillogin"])) : FALSE;
    $senha = $_POST["senhalogin"];

    $sql = "SELECT id, nome, email,aes_decrypt(senha,'UAM') as senha,adm FROM usuario WHERE email = '$login'";
    $resultado = mysqli_query($conexao, $sql);
    $total = mysqli_num_rows($resultado);

    if ($total) {
        $dados = mysqli_fetch_array($resultado);

        if ($senha == $dados["senha"] && $dados["adm"] == 0) {
            $_SESSION["id_usuario"] = $dados["id"];
            $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
            $sql2 = "UPDATE usuario set st_status = true WHERE email = '$login'";
            $resultado2 = mysqli_query($conexao, $sql2);

            if ($resultado2) {
                $numeroregistros1 = mysqli_affected_rows($conexao);
                $_SESSION["status"] = $dados["st_status"];
                $id1 = $_SESSION["id_usuario"];
                echo "<script>window.location='produtos.php'</script>";
            } else {
                echo "Falha ao executar comando";
            }
            mysqli_close($conexao);
            exit;
        } else if ($senha == $dados["senha"] && $dados["adm"] == 1) {
            $_SESSION["id_usuario"] = $dados["id"];
            $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
            $sql1 = "UPDATE usuario set st_status = true WHERE email = '$login'";
            $resultado1 = mysqli_query($conexao, $sql1);

            if ($resultado1) {
                $numeroregistros2 = mysqli_affected_rows($conexao);
                $_SESSION["status"] = $dados["st_status"];
                $id2 = $_SESSION["id_usuario"];
                echo "<script>window.location='administrarprodutos.php'</script>";
            } else {
                echo "Falha ao executar comando";
            }
            mysqli_close($conexao);
            exit;
        } else {
            echo "<script> alert('Senha inválida') </script>" .
            "<center>Você não foi autenticado, aguarde um instante...</center>";
            session_destroy();
            echo "<script>window.location='entrar.php'</script>";
        }
    } else {
        echo "<script> alert('Email inválido') </script>" .
        "<center>Você não foi autenticado, aguarde um instante...</center>";
        session_destroy();
        echo "<script>window.location='entrar.php'</script>";
    } 

    