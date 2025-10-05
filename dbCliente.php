<?php
    spl_autoload_register(function($table) {
        require_once "classes/{$table}.class.php";
    });

  
    $cliente = new Cliente;
    $cliente->setNome_cliente(filter_input(INPUT_POST, 'nome_cliente'));
    $cliente->setSobrenome_cliente(filter_input(INPUT_POST, 'sobrenome_cliente'));
    $cliente->setEmail(filter_input(INPUT_POST, 'email'));
    $cliente->setSenha(filter_input(INPUT_POST, 'senha'));
    $cliente->setTelefone(filter_input(INPUT_POST, 'telefone'));
    $cliente->setId_cliente(filter_input(INPUT_POST, 'id_cliente'));


   if (isset($_POST['btnGravar'])):
    $cliente->setnome_cliente(filter_input(INPUT_POST, 'nome_cliente'));
    $id_cliente = filter_input(INPUT_POST, 'id_cliente');
    if (empty($id_cliente)):
    if ($cliente->add()) {
            echo "<script>window.alert('Cliente cadastrado com sucesso.'); window.location.href='Cliente.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar Cliente.'); window.location.href='gerCliente.php';</script>";
        }
    else:
        if ($cliente->update('id_cliente', $id_cliente)) {
            echo "<script>window.alert('Cliente alterado com sucesso.'); window.location.href='Cliente.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Cliente.'); window.location.href='Cliente.php';</script>";
        }endif;
    elseif (filter_has_var(INPUT_POST,'btnDeletar')) :
        $id = intval(filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_NUMBER_INT));
        if ($cliente->delete('id_cliente', $id_cliente)) {
            header("location:Cliente.php");
        } else {
            echo "<script>window.alert('Erro ao excluir Cliente.'); window.location.href='Cliente.php';</script>";
        }
    endif;
