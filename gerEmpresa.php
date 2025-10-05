<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Empresa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="CSS/styleloja.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


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
    if (filter_has_var(INPUT_POST, "id_empresa")) {
      $edtEmp = new Empresa();
      $id_empresa = intval(filter_input(INPUT_POST, "id_empresa"));
      $Empresa = $edtEmp->search("id_empresa", $id_empresa);
    }
    ?>
    <form action="dbEmpresa.php" method="post" class="row g-4">

      <input type="hidden" value="<?php echo $Empresa->id_empresa ?? null; ?>" name="id_empresa">
      <div class="form-container">
        <h3 class="mb-4 text-center titulo-form">Cadastro de Empresa</h3>
        <form action="dbEmpresa.php" method="post" class="row g-4">
          <div class="col-12 mb-4">
            <label for="responsavel_empresa" class="form-label">Nome do responsável</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
              <input type="text" name="responsavel_empresa" class="form-control" id="responsavel_empresa"
                placeholder="Seu nome aqui" value="<?php echo $Empresa->responsavel_empresa ?? null; ?>" required>
            </div>
          </div>

          <div class="col-12 mb-4">
            <label for="nome_empresa" class="form-label">Nome da Empresa</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
              <input type="text" name="nome_empresa" class="form-control" id="nome_empresa"
                placeholder="Nome da empresa..." value="<?php echo $Empresa->nome_empresa ?? null; ?>" required>
            </div>
          </div>

          <div class="col-12 mb-4">
            <label for="historia" class="form-label">História da Empresa</label>
            <textarea class="form-control" name="historia" id="historia" rows="3"
              value="<?php echo $Empresa->historia ?? null; ?>" required></textarea>
          </div>

          <div class="col-12 mb-4">
            <label for="apresentacao" class="form-label">Apresentação da Empresa</label>
            <textarea class="form-control" name="apresentacao" id="apresentacao" rows="3"
              value="<?php echo $Empresa->apresentacao ?? null; ?>" required></textarea>
          </div>
          <div class="row">
          <div class="col-6 mb-4">
            <label for="Telefone" class="form-label">Telefone</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
              <input type="text" name="Telefone" class="form-control" id="Telefone"
                value="<?php echo $Empresa->Telefone ?? null; ?>" required>
            </div>
          </div>

          <div class="col-6 mb-4">
            <label for="atividade_economica" class="form-label">Atividade Econômica</label>
            <div class="input-group">
            <span class="input-group-text"><i class="bi bi-database-fill-gear"></i></span>
            <input type="text" name="atividade_economica" class="form-control" id="atividade_economica"
              value="<?php echo $Empresa->atividade_economica ?? null; ?>" required>
              </div>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
              <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
              <input type="email" name="email" class="form-control" id="email"
                value="<?php echo $Empresa->email ?? null; ?>" required>
            </div>
          </div>
          <div class="col-12 mb-4">
            <label for="instagram" class="form-label">Instagram da empresa</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-instagram"></i></span>
            <input type="text" name="instagram" class="form-control" id="instagram"
              value="<?php echo $Empresa->instagram ?? null; ?>" required>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="whatsapp" class="form-label">whatsapp</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-whatsapp"></i></span>
            <input type="text" name="whatsapp" class="form-control" id="whatsapp"
              value="<?php echo $Empresa->whatsapp ?? null; ?>" required>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="facebook" class="form-label">Facebook</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-facebook"></i></span>
            <input type="text" name="facebook" class="form-control" id="facebook"
              value="<?php echo $Empresa->facebook ?? null; ?>" required>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="CNPJ" class="form-label">CNPJ</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-credit-card"></i></i></span>
            <input type="text" name="CNPJ" class="form-control" id="CNPJ"
              value="<?php echo $Empresa->CNPJ ?? null; ?>" required>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="maps" class="form-label">Maps</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-globe-asia-australia"></i></span>
            <input type="text" name="maps" class="form-control" id="maps"
              value="<?php echo $Empresa->maps ?? null; ?>" required>
          </div>
          </div>
          <div class="col-12 mb-4">
            <label for="endereco" class="form-label">Endereço</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Rua tal, 1234"
              value="<?php echo $Empresa->endereco ?? null; ?>" required>
          </div>
          </div>
          <div class="row" >
          <div class="col-6 mb-4">
            <label for="numero_empresa" class="form-label">Número da Empresa</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-compass"></i></span>
            <input type="text" name="numero_empresa" class="form-control" id="numero_empresa"
              placeholder="Número da empresa" value="<?php echo $Empresa->numero_empresa ?? null; ?>" required>
          </div>
          </div>
          <div class="col-6 mb-4">
            <label for="Cidade" class="form-label">Cidade</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-pin-map-fill"></i></span>
            <input type="text" name="Cidade" class="form-control" id="Cidade"
              value="<?php echo $Empresa->Cidade ?? null; ?>" required>
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-6 mb-4">
            <label for="Estado" class="form-label">Estado</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-map"></i></span>
            <select id="Estado" name="Estado" class="form-select" value="<?php echo $Empresa->Estado ?? null; ?>"
              required>
              <option selected disabled value="">Selecione</option>
              <option>RO</option>
              <option>SP</option>
              <option>RJ</option>
              <option>MG</option>
              <option>PR</option>
            </select>
          </div>
          </div>
          <div class="col-6 mb-4">
            <label for="CEP" class="form-label">CEP</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-envelope"></i></span>
            <input type="text" name="CEP" class="form-control" id="CEP" value="<?php echo $Empresa->CEP ?? null; ?>"
              required>
          </div>
          </div>
          <div class="col-12 mb-5">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Aceito os termos e condições
              </label>
            </div>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-50" name="btnGravar">
              <i class="fa-solid fa-paper-plane me-2"></i>Cadastrar!
            </button>
          </div>
        </form>
      </div>
  </main>
  <?php require_once "_parts/_footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>