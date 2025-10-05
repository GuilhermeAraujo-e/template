<?php



spl_autoload_register(function($class){
require_once "classes/{$class}.class.php";
});

//criando uma instância da classe raça
$produto = new Produto();
$produto->setnome_produto(filter_input(INPUT_POST,"nome_produto"));
$produto->setid_produto(filter_input(INPUT_POST,"id_produto"));
$produto->setdescricao_produto(filter_input(INPUT_POST,"descricao_produto"));
$produto->setunidade_Medida(filter_input(INPUT_POST,"unidade_Medida"));
$produto->setpreco(filter_input(INPUT_POST,"preco"));



if (isset($_POST['btnGravar'])):
    $produto->setnome_produto(filter_input(INPUT_POST, 'nome_produto'));
    $id_produto = filter_input(INPUT_POST, 'id_produto');
    if (empty($id_produto)):
    if ($produto->add()) {
            echo "<script>window.alert('Produto cadastrado com sucesso.'); window.location.href='Produtos.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao adicionar Produto.'); window.location.href='gerProduto.php';</script>";
        }
    else:
        if ($produto->update('id_produto', $id_produto)) {
            echo "<script>window.alert('Produto alterado com sucesso.'); window.location.href='Produtos.php';</script>";
        } else {
            echo "<script>window.alert('Erro ao alterar Produto.'); window.location.href='Produtos.php';</script>";
        }endif;
    elseif (filter_has_var(INPUT_POST,'btnDeletar')) :
        $id_produto = intval(filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_NUMBER_INT));
        if ($produto->delete('id_produto', $id_produto)) {
            header("location:Produtos.php");
        } else {
            echo "<script>window.alert('Erro ao excluir Produto.'); window.location.href='Produtos.php';</script>";
        }
    endif;