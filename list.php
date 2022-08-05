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
    <link
      rel="shortcut icon"
      href="https://www.ellosdesign.com.br/favicon.ico"
    />
    <title>Sucesso ♥</title>
    <link rel="stylesheet" href="./styles/global.css" />
    <link rel="stylesheet" href="./styles/list.css" />
  </head>
  <body>
    <div class="logo">
    <a href="./index.html">
    <img src="https://www.ellosdesign.com.br/uploads/img/loja_logo/26/839832203f0ccb748166a95351aff98b.png" alt="logo">
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
