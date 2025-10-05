<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="CSS/baseAdmin.css">
    
    <title>Usuarios</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?php require_once "_parts/_menu.php"; ?>
    </header>

    <main class="container my-4">
        <div class="bg-dark text-white rounded p-3 mb-4 shadow-sm">
            <h3 class="m-0">Usuarios</h3>
        </div>

        <div class="mb-3">
            <a href="gerUsuario.php" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Novo Usuario
            </a>
        </div>

        <div class="table-responsive shadow-sm rounded">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    spl_autoload_register(function ($class) {
                        require_once "classes/{$class}.class.php";
                    });
                    $u = new Usuario();
                    $Usuario = $u->all();
                    foreach ($Usuario as $usuario):
                    ?>
                        <tr>
                            <td><?php echo $usuario->codigo; ?></td>
                            <td class="text-start"><?php echo $usuario->nome; ?></td>
                            <td class="d-flex justify-content-center gap-1">
                            <form action="<?php echo htmlspecialchars("gerUsuario.php") ?>" method="post" class="d-flex">
                                <input type="hidden" name="codigo" value="<?php echo $usuario->codigo ?>"><button
                                    name="btnEditar" class="btn btn-primary btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que quer editar esse Usuario?');"><i
                                        class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                            <form action="<?php echo htmlspecialchars("dbUsuario.php") ?>" method="post" class="d-flex">
                                <input type="hidden" name="codigo" value="<?php echo $usuario->codigo ?>"><button
                                    name="btnDeletar" id="btnDeletar" class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que quer deletar esse Usuario?');"><i
                                        class="bi bi-trash"></i>
                                </button>
                            </form>
                           </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </footer>
    </main>
    <footer>
        <?php require_once "_parts/_footer.php"; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>