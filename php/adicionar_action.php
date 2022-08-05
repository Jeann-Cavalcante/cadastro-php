<?php

require 'config.php';
// require 'configDeveloper.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, 'tel');
$message = filter_input(INPUT_POST, 'message');

if( $name && $email && $tel && $message ){

  $sql = $pdo->prepare('SELECT * FROM users WHERE email = :email');
  $sql->bindValue(':email', $email);
  $sql->execute();

  if( $sql->rowCount() == 0 ){
  $sql = $pdo->prepare("INSERT INTO users (nome, email, telefone, comentario_cliente) 
  VALUES (:name, :email, :tel, :message)");
  $sql->bindValue(':name', $name);
  $sql->bindValue(':email', $email);
  $sql->bindValue(':tel', $tel);
  $sql->bindValue(':message', $message);
  $sql->execute();

  header('Location: ../list.php');
  }
}