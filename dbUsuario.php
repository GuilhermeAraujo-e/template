<?php


    spl_autoload_register(function ($table){
        require_once "classes/{$table}.class.php";
    });
    $usuario = new Usuario();
   $usuario->setsenha(filter_input(INPUT_POST, "senha"));
   $usuario->setemail(filter_input(INPUT_POST, "email"));
$usuario->setfuncao(filter_input(INPUT_POST, "funcao"));
$usuario->setnome(filter_input(INPUT_POST, "nome"));
$usuario->setcpf(filter_input(INPUT_POST, "cpf"));
$usuario->settelefone(filter_input(INPUT_POST, "telefone"));
$usuario->setcodigo(filter_input(INPUT_POST,"codigo"));
   
    //tentar adicionar e exibe a mensagem ao usuario
    if (isset($_POST['btnGravar'])):
    $usuario->setnome(filter_input(INPUT_POST, 'nome'));
    $codigo = filter_input(INPUT_POST, 'codigo');
    if (empty($codigo)):
    if ($usuario->add()) {
            echo "<script>window.alert('Usuario cadastrado com sucesso.'); window.location.href='Usuarios.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar Usuario.'); window.location.href='gerUsuario.php';</script>";
        }
    else:
        if ($usuario->update('codigo', $codigo)) {
            echo "<script>window.alert('Usuario alterado com sucesso.'); window.location.href='Usuarios.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Usuario.'); window.location.href='Usuarios.php';</script>";
        }endif;
    elseif (filter_has_var(INPUT_POST,'btnDeletar')) :
        $codigo = intval(filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT));
        if ($usuario->delete('codigo', $codigo)) {
            header("location:Usuarios.php");
        } else {
            echo "<script>window.alert('Erro ao excluir Usuario.'); window.location.href='Usuarios.php';</script>";
        }
    endif;