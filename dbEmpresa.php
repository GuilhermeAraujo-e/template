<?php
    spl_autoload_register(function($table){
        require_once "classes/{$table}.class.php";
    });

 
    $empresa = new Empresa();
    $empresa->setid_empresa(filter_input(INPUT_POST,"id_empresa"));
    $empresa->setCNPJ(filter_input(INPUT_POST,"CNPJ"));
    $empresa->setnome_empresa(filter_input(INPUT_POST,"nome_empresa"));
    $empresa->setendereco(filter_input(INPUT_POST,"endereco"));
    $empresa->setnumero_empresa(filter_input(INPUT_POST,"numero_empresa"));
    $empresa->setcidade(filter_input(INPUT_POST,"Cidade"));
    $empresa->setCEP(filter_input(INPUT_POST,"CEP"));
    $empresa->setEstado(filter_input(INPUT_POST,"Estado"));
    $empresa->setemail(filter_input(INPUT_POST,"email"));
    $empresa->settelefone(filter_input(INPUT_POST,"telefone"));
    $empresa->setresponsavel_empresa(filter_input(INPUT_POST,"responsavel_empresa"));
    $empresa->setatividade_economica(filter_input(INPUT_POST,"atividade_economica"));
    $empresa->sethistoria(filter_input(INPUT_POST,"historia"));
    $empresa->setapresentacao(filter_input(INPUT_POST,"apresentacao"));
    $empresa->setinstagram(filter_input(INPUT_POST,"instagram"));
    $empresa->setwhatsapp(filter_input(INPUT_POST,"whatsapp"));
    $empresa->setfacebook(filter_input(INPUT_POST,"facebook"));
    $empresa->setmaps(filter_input(INPUT_POST,"maps"));
    $empresa->setlogo(filter_input(INPUT_POST,"logo"));

   if (isset($_POST['btnGravar'])):
    $empresa->setnome_empresa(filter_input(INPUT_POST, 'nome_empresa'));
    $id_empresa = filter_input(INPUT_POST, 'id_empresa');
    if (empty($id_empresa)):
    if ($empresa->add()) {
            echo "<script>window.alert('Usuario cadastrado com sucesso.'); window.location.href='Empresas.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar Usuario.'); window.location.href='gerEmpresa.php';</script>";
        }
    else:
        if ($empresa->update('id_empresa', $id_empresa)) {
            echo "<script>window.alert('Empresa alterada com sucesso.'); window.location.href='Empresas.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Usuario.'); window.location.href='Empresas.php';</script>";
        }endif;
    elseif (filter_has_var(INPUT_POST,'btnDeletar')) :
        $id_empresa = intval(filter_input(INPUT_POST, 'id_empresa', FILTER_SANITIZE_NUMBER_INT));
        if ($empresa->delete('id_empresa', $id_empresa)) {
            header("location:Empresas.php");
        } else {
            echo "<script>window.alert('Erro ao excluir Empresa.'); window.location.href='Empresas.php';</script>";
        }
    endif;