<?php

spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});

// Criando uma instância da classe Raca
$foto = new FotoProduto();
$imgFile = new Imagem(prefixo: "prod_");
if (filter_has_var(INPUT_POST, "btnGravar")):
    $foto->iniciarTransacao();
    try {
        $nomeArquivo = $imgFile->upload($_FILES['foto']);
        $id_produto = filter_input(INPUT_POST, 'id_produto');
        $foto->setProduto($id_produto);
        $foto->setNome($nomeArquivo);
        $foto->setAlternativo(filter_input(INPUT_POST, 'textoAlt'));
        $foto->setLegenda(filter_input(INPUT_POST, 'legenda'));
        $idFoto = filter_input(INPUT_POST, 'idFoto');

        if (empty($idFoto)):
            if ($foto->add()) {
                $mensagem = "Foto adicionada com sucesso.";
            } else {
                $mensagem = "Erro ao adicionar a foto.";
            }
        else:

        endif;
        echo "<script>window.alert('$mensagem'); window.location.
        href='fotoProduto?id_produto.php=$id_produto';</script>";
        $foto->confirmarTransacao();
    } catch (\Throwable $th) {
        $imgFile->deletar($nomeArquivo);
        $foto->cancelarTransacao();
        $erro = $th->getMessage();
        echo "<script>window.alert('Erro: $erro'); window.open
        (document.referrer,'_self');</script>";
    }

elseif (filter_has_var(INPUT_POST, "btnDeletar")):

endif;