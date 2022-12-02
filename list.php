<?php 
require './php/config.php';
// require './php/configDeveloper.php';
$sql = $pdo->query("SELECT * FROM users");
if( $sql->rowCount() > 0 ){
  $lista = $sql->fetchAll();
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%234a90e2%22></rect><path fill=%22%23fff%22 d=%22M54.91 22.55L54.91 22.55Q55.36 22.37 56.30 22.15Q57.24 21.92 58.23 21.92L58.23 21.92Q62.20 21.92 62.20 25.25L62.20 25.25L62.20 63.77Q62.20 67.82 61.02 70.56Q59.86 73.31 57.83 74.98Q55.80 76.64 53.15 77.36Q50.49 78.08 47.61 78.08L47.61 78.08Q42.48 78.08 40.14 76.87Q37.80 75.65 37.80 73.67L37.80 73.67Q37.80 72.41 38.34 71.51Q38.88 70.61 39.34 70.16L39.34 70.16Q40.69 70.79 42.58 71.33Q44.47 71.87 46.53 71.87L46.53 71.87Q50.59 71.87 52.74 69.94Q54.91 68 54.91 63.41L54.91 63.41L54.91 22.55Z%22></path></svg>" />
    <title>Sucesso ♥</title>
    <link rel="stylesheet" href="./styles/global.css" />
    <link rel="stylesheet" href="./styles/list.css" />
  </head>
  <body>
    <div class="logo">
    <a href="./index.html">
    <span style="font-size: 35px; color: white">Logotipo</span>
  </a>
</div>
<div class="back">
  <a href="./index.html">
  Voltar
  </a>
</div>
    <h1>Cadastros de usuarios</h1>
    <table class="table-fill">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($lista as $users): ?>
        <tr>
          <td> <?= $users['id'] ?> </td>
          <td> <?= $users['nome'] ?> </td>
          <td><?= $users['email'] ?></td>
          <td> <?= $users['email'] ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>
