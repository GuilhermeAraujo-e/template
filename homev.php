<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="shortcut icon" href="Images/coguvaca.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/baseHome.css">
  <title>home</title>

</head>

<body>
  <!-- nosso cabeçalho -->
  <header>
    <h1>Home</h1>
  </header>
  <nav>
    <a href="dashboard.php">Home</a>
    <a href="">Categorias</a>
    <a href="gerCliente.php">Clientes</a>
    <a href="gerEmpresa.php">Empresa</a>
    <a href="index.php">Página Inicial</a>
    <a href="gerProdutos.php">Produtos</a>
    <a href="gerUsuario.php">Usuários</a>
  </nav>
  <main class="quadradao">

    <section id="bemvindo">
      <h2>bemvindo</h2>

    </section>
    <div class="row d-flex align-items-center col-md-6">
      <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner rounded">
            <div class="carousel-item active">
              <img src="images/integrantes.png" class="d-block w-100" alt="Grupo">
            </div>
            <div class="carousel-item">
              <img src="images/crisd.png.png" class="d-block w-100" alt="Danilo">
            </div>
            <div class="carousel-item">
              <img src="images/neyg.png.png" class="d-block w-100" alt="Gabriel">
            </div>
            <div class="carousel-item">
              <img src="images/gabir.png.png" class="d-block w-100" alt="Rubens">
            </div>
            <div class="carousel-item">
              <img src="images/gansom.png.png" class="d-block w-100" alt="Miguel">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
          </div>
        </div>
      </div>
    </div>


  </main>


  <footer>
    <p>&copy; 2025 Fazenda Bezerra Evangelista - Todos os direitos reservados.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>


</html>