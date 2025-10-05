<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/styleloja.css">

</head>

<body>
<header>
    <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main class="container">
    <?php
      spl_autoload_register(function ($class) {
         require_once "classes/{$class}.class.php";
      });
      if (filter_has_var(INPUT_POST, "id_produto")) {
         $edtProd = new Produto();
         $id_produto = intval(filter_input(INPUT_POST, "id_produto"));
         $Produto = $edtProd->search("id_produto", $id_produto);
      }
      ?>
      <form action="dbProduto.php" method="post" class="login">

         <input type="hidden" value="<?php echo $Produto->id_produto ?? null; ?>"name="id_produto">
            <div class="col-8">
                <label for="nome_produto" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome_produto" id="nome_produto"value="<?php echo $Produto->nome_produto ??  null;  ?>">
            </div>
            <div class="col-12">
                <label for="descricao_produto" class="form-label">Descrição</label>
                <input type="text" class="form-control" name="descricao_produto" id="descricao_produto"value="<?php echo $Produto->descricao_produto  ??  null;  ?>">
            </div>
            <div class="col-md-6">
                <label for="unidade_Medida" class="form-label">Unidade de Medida</label>
                <input type="text" class="form-control" name="unidade_Medida" id="unidade_Medida"value="<?php echo $Produto->unidade_Medida ??  null;  ?>">
            </div>
            <div class="col-md-6">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" class="form-control" name="preco" id="preco"value="<?php echo $Produto->preco  ??  null;  ?>">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="btnGravar" id="btnGravar" >Salvar</button>
            </div>
            </div>
        </form>
    </main>
    <?php require_once "_parts/_footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
