<?php


spl_autoload_register(function ($class) {
    require_once "classes/{$class}.class.php";
});
if (filter_has_var(INPUT_GET, "id_produto")) {
    $p = new Produto();
    $id_produto = intval(filter_input(INPUT_GET, "id_produto"));
    $produto = $p->search("id_produto", $id_produto);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Fotos do produto: <?php echo $produto->id_produto ?></title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main class="container mt-3">
        <div class="mt-3">
            <h4><?php echo $produto->id_produto ?></h4>
        </div>
        <div class="mb-3 mt-3">
            <a href="gerFotoProduto.php?id_produto=<?php echo $produto->id_produto ?>" class="btn btn-outline-success"
                type="submit">
                Nova Foto
            </a>
        </div>
        <!-- Código php para spl_autoload_register -->
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <?php
            $f = new FotoProduto();
            $fotos = $f->fotoproduto($produto->id_produto);
            foreach ($fotos as $foto):
                ?>

                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text">Legenda</p>
                        <p>
                        <form action="" method="post">
                            <input type="hidden" name="idFoto" value="">
                            <button type="submit" name="btnEditar" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>
                        <form action="" method="post" class="d-flex">
                            <input type="hidden" name="idFoto" value="">
                            <button name="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Tem certeza que deseja deletar a Foto?');">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JS/exibir.js"></script>
</body>

</html>