<?php

include 'conexao.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO tb_categoria VALUES (null, '$nome', $categoria, '$descricao')";


if ($conexao -> query($sql)){
    echo "<script> alert('✔ Inserido com Sucesso!'); history.back(); </script>";
}

else{
    echo "Falha na Conexão com o Banco de Dados";
}

?>