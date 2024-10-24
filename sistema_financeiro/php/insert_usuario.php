<?php


include 'conexao.php';


$nome = $_POST['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];
$cargo = $_POST ['cargo'];

$sql = "INSERT INTO tb_user VALUES (null, '$nome', '$email', '$cargo', '$senha')";


if ($conexao -> query($sql)){
    echo "<script> alert('✔ Inserido com Sucesso!'); document.location.href=    '../index.html' </script>";
}

else{
    echo "Falha na Conexão com o Banco de Dados";
}







?>