<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

$queryUpdate = $link->query("update clientes set nome='$nome', email='$email', telefone='$telefone' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
  header("Location:../consultas.php");
endif;

?>