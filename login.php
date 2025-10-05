<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login de Usuário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="CSS/layout.css">

  
</head>

<body>

  <div class="form-container">
    <h3 class="mb-4 text-center">Login de Usuário</h3>
    
    <form action="validarlogin.php" method="post" class="row g-4">

      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
          <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" required />
        </div>
      </div>

      <div class="col-12">
        <label for="senha" class="form-label">Senha</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha" required minlength="8" maxlength="20" />
          
            
          </button>
        </div>
      </div>

      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary w-50" name="btnLogin">
          <i class="fa-solid fa-right-to-bracket me-2"></i>Entrar
        </button>
      </div>
        <a href="gerUsuario.php">Não tem conta? Cadastre-se</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>