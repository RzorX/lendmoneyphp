<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Conectar com o MySQL
$conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");

// Testando conexão
if ($conexao == TRUE) {
    echo "FOI";
} else {
    echo "DEURUIM";
}

// Seleciona banco de dados
$db = mysqli_select_db($conexao, "id13007198_itander");
print_r($db);

/*
  // Insere um registro na tabela
  $sql = "INSERT INTO Test (nome) VALUES ('Testando')";
  $resultado = mysqli_query($conexao, $sql);

  if($resultado){
  $numeroregistros = mysqli_affected_rows($conexao);
  echo "Comando executado com sucesso";
  echo "Foram afetados $numeroregistros";
  } else {
  echo "Falha ao executar comando";
  }
  mysqli_close($conexao);
 */

// Retorna um registro da tabela
//$sqlselect = "SELECT id,nome FROM Test WHERE id = '".$_POST["valor"]."'";
$sqlselect = "SELECT id,nome FROM Test";
$resultadoselect = mysqli_query($conexao, $sqlselect);

if ($resultadoselect) {
    while ($registro = mysqli_fetch_array($resultadoselect)) {
        if ($registro["id"] == 1) {
            echo "ID do misaravel: " . $registro["id"];
            echo "Nome do registro: " . $registro["nome"];
        }
    }
}
mysqli_close($conexao);

//mysqli_query($link, $dbname);
//mysqli_fetch_array($result);
//Tratamento de erro
function inverter($x) {
    if ($x == 0) {
        throw new Exception();
    } else {
        echo 1 / $x;
    }
}

//Master Datails
?>
<html>
    <form action="" name="f1" method="post">
        <h3> Enviar os dados para inserção em um BD MySQL Alunos </h3>
        <p> Nome para inserir </p> <input type="text" name="valor">
        <input type="submit" name="inserir" value="Inserir Aluno">
    </form>
    <?php
    if (isset($_POST["inserir"])) {
        $valor = $_POST["valor"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sql = "INSERT INTO Test (nome) VALUES ('$valor')";
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
    ?>
    <form action="" name="f2" method="post">
        <h3> Consultar um dado ou todos os dados em um BD MySQL Alunos </h3>
        <p> Nome para buscar </p> <input type="text" name="valorconsulta">
        <input type="submit" name="consultar" value="Consultar por nome">
    </form>
    <?php
    if (isset($_POST["consultar"])) {
        $valor = $_POST["valorconsulta"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sqlselect = "SELECT id,nome FROM Test WHERE nome = '" . $_POST["valorconsulta"] . "'";
        $resultadoselect = mysqli_query($conexao, $sqlselect);

        if ($resultadoselect) {
            while ($registro = mysqli_fetch_array($resultadoselect)) {
                echo "ID do Aluno: " . $registro["id"];
                echo "Nome do Aluno: " . $registro["nome"];
            }
        }
        mysqli_close($conexao);
    }
    ?>
    <form action="" name="f3" method="post">
        <h3> Excluir um dado em um BD MYSQL Alunos </h3>
        <p> Nome para excluir </p> <input type="text" name="valorexcluir">
        <input type="submit" name="excluir" value="Excluir por nome">
    </form>
    <?php
    if (isset($_POST["excluir"])) {
        $valor = $_POST["valorexcluir"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sql = "DELETE FROM Test WHERE nome = '$valor'";
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
    ?>
    <form action="" name="f3" method="post">
        <h3> Alterar um dado em um BD MYSQL Alunos </h3>
        <p> Nome para buscar na alteração </p><input type="text" name="valoraltera">
        <p> Novo nome </p><input type="text" name="newvalor">
        <input type="submit" name="alterar" value="Alterar por nome">
    </form>
    <?php
    if (isset($_POST["alterar"])) {
        $valor = $_POST["valoraltera"];
        $newvalor = $_POST["newvalor"];
        $conexao = mysqli_connect("localhost", "id13007198_admin", "?&v#^^rs$\*33FME");
        $db = mysqli_select_db($conexao, "id13007198_itander");
        $sql = "UPDATE Test set nome = '" . $_POST["newvalor"] . "' WHERE nome = '" . $_POST["valoraltera"] . "'";
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
    ?>
</html>
