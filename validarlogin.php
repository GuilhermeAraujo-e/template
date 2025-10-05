<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

spl_autoload_register(function ($class) {
require_once "Classes/{$class}.class.php";
});

$Login = new Usuario();
$dados = $Login->validarlogin($email);
if ($dados) {
if (password_verify($senha, $dados->senha)) {
$_SESSION['email'] = $dados->email;
$_SESSION['senha'] = $dados->senha;
header("Location: index.php");
      exit();
    } else {
      echo "<script>alert('Sucesso'); window.history.back();</script>";
    }
  } else {
    echo "<script>alert('Usuário não cadastrado'); window.history.back();</script>";
  }
} else {
  header("Location: index.php");
  exit;
}