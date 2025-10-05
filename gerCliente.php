<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/styleloja.css">

</head>

<body>
<header>
    <?php require_once "_parts/_menu.php"; ?>
    </header>
    <main>
    <?php
      spl_autoload_register(function ($class) {
         require_once "classes/{$class}.class.php";
      });
      if (filter_has_var(INPUT_POST, "id_cliente")) {
         $edtC = new Cliente();
         $id_cliente = intval(filter_input(INPUT_POST, "id_cliente"));
         $Cliente = $edtC->search("id_cliente", $id_cliente);
      }
      ?>
      <form action="dbCliente.php" method="post" class="row g3 mt-3">

         <input type="hidden" value="<?php echo $Cliente->id_cliente ?? null; ?>"name="id_cliente">
    <div class="login">
        <h3 class="mb-4 text-center">Cadastro de Cliente</h3>
        <form action="dbCliente.php" method="post" class="row g-4">
            <div class="col-md-12">
                <label for="nome_cliente" class="form-label">Nome e Sobrenome</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="nome_cliente" class="form-control" id="nome_cliente" placeholder="Digite seu nome" value="<?php echo $Cliente->nome_cliente ??  null;  ?>" required>
                    <input type="text" name="sobrenome_cliente" class="form-control" id="sobrenome_cliente" placeholder="Digite seu sobrenome" value="<?php echo $Cliente->sobrenome_cliente ??  null;  ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" value="<?php echo $Cliente->email ??  null;  ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <label for="senha" class="form-label">Senha</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="senha" class="form-control" id="senha"  placeholder="Digite sua senha" required minlength="8" maxlength="20" value="<?php echo $Cliente->senha ??  null;  ?>">                      
                    </button>
                </div>
                <div class="form-text">
                    Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve conter espaços, caracteres especiais ou emojis.
                </div>
            </div>

            <div class="col-md-4">
                <label for="telefone" class="form-label">Telefone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" value="<?php echo $Cliente->telefone ??  null;  ?>" required>
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="termos" required>
                    <label class="form-check-label" for="termos">
                        Aceito os termos e condições
                    </label>
                </div>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-50" name="btnGravar">
                    <i class="fa-solid fa-paper-plane me-2"></i>Enviar
                </button>
            </div>
        </form>
</div>
<main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>