<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/motor.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body class="cada">

<?php
include 'conexao.php';
 
$id = intval($_GET['id']);
$sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
$result = $conexao ->query($sql);
$row = $result->fetch_assoc();

echo $row['nome'];
?>

    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img_cad" src="img/7496216.jpg" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4" style="margin-top: 12%;">
            <i class="fa-solid fa-user"></i>
            <form action="php/insert_usuario.php" method="post">
                <div class="cadastro">
                  <h1 class="cad1">Cadastro</h1>
                  <br>
                  <br>
                <div class="mb-3">
                  <label for="nome" class="form-label1">Nome</label>
                  <input type="varchar" value="<?php $row['nome'];?>" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label1">Email</label>
                  <input type="email" value="<?php $row['email'];?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                
                <div class="mb-3">
                  <label for="cargo" class="form-label1"> Cargo</label>
                  <input type="text" value="<?php $row['cargo'];?>" class="form-control" id="cargo" name="cargo" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
              </div>
                <button type="submit" class="bt btn">Atualizar</button>
                <a href="index.html" type="submit" class="bt btn" >Voltar</a>
              </form>
          </div>
          <div class="col-sm-12 col-md-4">
            
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>