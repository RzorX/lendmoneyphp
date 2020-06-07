<?php

// Conexão com o banco de dados 
$conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
$db = mysqli_select_db($conexao, "id13007198_itander");

// Inicia sessões 
session_start();

// Recupera o login 
$login = isset($_POST["emaillogin"]) ? addslashes(trim($_POST["emaillogin"])) : FALSE;
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senhalogin"]) ? md5(trim($_POST["senhalogin"])) : FALSE;

/**
 * Executa a consulta no banco de dados. 
 * Caso o número de linhas retornadas seja 1 o login é válido, 
 * caso 0, inválido. 
 */
$sql = "SELECT id, nome, email, senha FROM usuario WHERE email = '$login'";
$resultado = mysqli_query($conexao, $sql);
$total = mysqli_num_rows($resultado);

// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if ($total) {
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
    $dados = mysqli_fetch_array($resultado);

    // Agora verifica a senha 
    if (!strcmp($senha, $dados["senha"])) {
        $_SESSION["id_usuario"] = $dados["id"];
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
        $sql2 = "UPDATE usuario set st_status = true WHERE email = '$login'";
        $resultado2 = mysqli_query($conexao, $sql2);

        if ($resultado2) {
            $numeroregistros = mysqli_affected_rows($conexao);
            $_SESSION["status"] = $dados["st_status"];
            $id = $_SESSION["id_usuario"];
            header("Location: produtos.php?id=".$id);
        } else {
            echo "Falha ao executar comando";
        }
        mysqli_close($conexao);
        exit;
    }
    // Senha inválida 
    else {
        echo "Senha invalida!";
        "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
        <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
        session_destroy();
        exit;
    }
}
// Login inválido 
else {
    echo "O login fornecido por você é inexistente!";
    echo "<html> <div style='text-align: center'> <form name = 'voltar' method = 'POST' action = 'index.php'>
        <input name = 'voltar' type = 'submit' value = 'Voltar'></form> </div> </html>";
    session_destroy();
    exit;
} 
