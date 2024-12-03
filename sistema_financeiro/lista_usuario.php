<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
   
    <!-- NavBar -->
 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Financeiro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-info" href="php/logout.php" role="button">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 
    <!-- Tabelas (Bootstrap) -->
 
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cargo</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php
  include 'php/conexao.php';
    $sql = "SELECT * FROM tb_user";
    $query = $conexao->query($sql);
 
      if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['id_usuario'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['cargo'] . "</td>";
          echo "<td><a href='php/editar.php?id=" . $row['id_usuario'] . "'>Editar</a></td>";
          echo "<td><a href='php/excluir_usuario.php?id=" . $row['id_usuario'] . "' onclick=\"return confirm('Você tem certeza de que deseja excluir este usuário')\">Excluir</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='6'>Usuário não encontrado.</td>>/tr>";
      }
      ?>
  </tbody>
</table>
</div>
 
 
 
     
 
</body>
</html>