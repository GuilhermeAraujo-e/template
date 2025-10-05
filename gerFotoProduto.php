<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    <title>Adicionar Foto</title>
</head>

<body>
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main class="container">
        <div class="titutlo mt-3">
            <h3>Adicionar </h3>
        </div>
        <?php
        spl_autoload_register(function ($class) {
            require_once "classes/{$class}.class.php";
        });
        $id_produto = null;
        if (filter_has_var(INPUT_GET, 'btnEditar')):

        elseif (filter_has_var(INPUT_GET, 'id_produto')):
            $id_produto = filter_input(INPUT_GET, 'id_produto');
        endif;
        ?>
        <form method="post" action="dbFotoProduto.php" class="row g-3 mt-3" enctype="multipart/form-data">
            <input type="hidden" name="id_produto" value="<?php echo $id_produto ?? null; ?>">
            <input type="hidden" name="idFoto" value="<?php echo $foto->id_foto ?? null; ?>">
            <div class="col-md-6 mt-3">
                <label for="legenda" class="form-label">Legenda</label>
                <input type="text" name="legenda" id="legenda" placehoader="Digite a legenda da foto" required
                    class="form-control" value="">
            </div>
            <div class="col-md-6 mt-3">
                <label for="textoAlt" class="form-label">Texto alternativo</label>
                <input type="text" name="textoAlt" id="textoAlt" placehoader="Digite o texto alternativo da foto" required
                    class="form-control" value="">
            </div>
            <div class="col-12 mt-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" accept=".png, .jpg, .jpeg" required>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" name="btnGravar" class="btn btn-success">Gravar</button>
            </div>
        </form>
    </main>
    <footer>
        <?php require_once("_parts/_footer.php"); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>