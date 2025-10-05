<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LJMC Beauty</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Seu CSS -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="CSS/baseSite.css" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>

<body>

  <!-- mini linha frete gratis -->
  <header class="text-center">
    ✨ Frete grátis para todo Brasil!
  </header>

  <!-- Barra branca com logo e ícones -->
  <div class="top-bar">
    <!-- Botão menu hambúrguer -->
    <div id="menu-btn" class="menu-icon">
      <i class="bi bi-list"></i>
    </div>

    <!-- Logo central -->
    <div class="logo">
      <img src="images/logofolha.png" alt="LJMC Beauty">
    </div>

    <!-- Ícones pessoa e busca -->
    <div class="icons">
      <i class="bi bi-search"></i>
      <a href="login.php">
        <i class="bi bi-person"></i>
      </a>
    </div>

    <!-- Botão para mostrar "categorias" -->
    <div id="side-menu" class="side-menu">
      <span id="close-menu" class="close-btn">&times;</span>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="sobrenos.php">Sobre Nós</a></li>
        <li><a href="maps.php">Como chegar</a></li>
        <li><a href="CatalogoProdutos.php">Produtos</a></li>

        <li class="submenu">
          <a href="#" id="categorias-btn">Categorias</a>
          <div class="categorias-lista">
            <ul>
              <li><a href="#">Só para você</a></li>
              <li><a href="#">Novo em</a></li>
              <li><a href="#">Envio nacional</a></li>
              <li><a href="#">Promoção</a></li>
            </ul>
          </div>
        </li>

        <li><a href="login.php">Minha Conta</a></li>
      </ul>
    </div>
  </div>
  <!-- Carrossel grande -->
  <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner1.png" class="d-block w-100" alt="Banner 1">
      </div>
      <div class="carousel-item">
        <img src="images/banner2.png" class="d-block w-100" alt="Banner 2">
      </div>
      <div class="carousel-item">
        <img src="images/banner3.png" class="d-block w-100" alt="Banner 3">
      </div>
      <div class="carousel-item">
        <img src="images/banner4.png" class="d-block w-100" alt="Banner 4">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!--abertura e fechamento do menu lateral -->
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const sideMenu = document.getElementById('side-menu');
    const closeBtn = document.getElementById('close-menu');

    menuBtn.addEventListener('click', () => {
      sideMenu.classList.add('open');
    });

    closeBtn.addEventListener('click', () => {
      sideMenu.classList.remove('open');
    });
  </script>

  <!--aparecer as subcategorias -->
  <script>
    const categoriasBtn = document.getElementById('categorias-btn');
    const submenu = categoriasBtn.parentElement;

    categoriasBtn.addEventListener('click', (e) => {
      e.preventDefault();
      submenu.classList.toggle('open');
    });
  </script>

  <!-- Seção de produtos -->
  <div class="product-section">
    <h2 class="titulo-produtos">Os mais desejados</h2>
    <div class="product-cards">
      <a href="Produtovenda.php" class="product-card card1">
        <h4>Colágeno Uva</h4>
        <img src="images/pote.png" alt="ImagemProduto7">
        <span class="preco">R$ 161,91</span>
        <span class="ParcelaProduto">3x de R$ 53,97</span>
      </a>

      <a href="Produtovenda.php" class="product-card card2">
        <h4>Colágeno Morango</h4>
        <img src="images/pote.png" alt="ImagemProduto6">
        <span class="preco">R$ 161,91</span>
        <span class="ParcelaProduto">3x de R$ 53,97</span>
      </a>

      <a href="Produtovenda.php" class="product-card card3">
        <h4>Colágeno Laranja</h4>
        <img src="images/pote.png" alt="ImagemProduto3">
        <span class="preco">R$ 161,91</span>
        <span class="ParcelaProduto">3x de R$ 53,97</span>
      </a>

      <a href="Produtovenda.php" class="product-card card4">
        <h4>Colágeno Maçã Verde</h4>
        <img src="images/pote.png" alt="ImagemProduto4">
        <span class="preco">R$ 161,91</span>
        <span class="ParcelaProduto">3x de R$ 53,97</span>
      </a>

      <a href="Produtovenda.php" class="product-card card5">
        <h4>Colágeno Limão</h4>
        <img src="images/pote.png" alt="ImagemProduto5">
        <span class="preco">R$ 161,91</span>
        <span class="ParcelaProduto">3x de R$ 161,91</span>
      </a>
    </div>
  </div>
  </div>
  <section class="informacoes">
    <h2 class="titulo-informacoes">Criado por quem entende as suas necessidades</h2>

    <div class="blocos-info">
      <div class="bloco-info">
        <img src="images/homebeleza.png" alt="Tecnologia All In One" class="icone-info">
        <h3>ESTILO DE VIDA</h3>
        <p>Cuidar de si mesma não precisa ser complicado. A beleza começa de dentro pra fora.</p>
      </div>

      <div class="bloco-info">
        <img src="images/homecoelho.png" alt="Não Testamos em Animais" class="icone-info">
        <h3>NÃO TESTAMOS EM ANIMAIS</h3>
        <p>Nossos produtos não são testados em animais. Ética e respeito em cada escolha.</p>
      </div>

      <div class="bloco-info">
        <img src="images/homelabin.png" alt="Dermatologicamente Testado" class="icone-info">
        <h3>AUTENTICIDADE</h3>
        <p>Ingredientes selecionados, fórmula pensada para você com eficácia comprovada.</p>
      </div>
    </div>
  </section>

  <section class="sobre-nos">
    <div class="sobre-container">

      <!-- Lado da imagem -->
      <div class="sobre-imagem">
        <img src="images/pote2.png" alt="Nossa empresa">
      </div>

      <!-- Lado do texto -->
      <div class="sobre-texto">
        <h2>Sobre nós</h2>
        <p>
          Somos uma empresa criada por quatro amigas que acreditam no poder da saúde e do bem-estar.
          Nossa missão é desenvolver vitaminas e suplementos que unam qualidade, inovação e sustentabilidade.
        </p>
        <p>
          Desde o início, buscamos entregar produtos que respeitam o meio ambiente e promovem um estilo de vida
          saudável,
          sem abrir mão da transparência e do cuidado em cada etapa do processo.
        </p>
        <p>
          Agradecemos a cada cliente que confia no nosso trabalho e caminha junto conosco nessa jornada por mais
          energia, saúde e vitalidade.
        </p>
        <a href="sobrenos.php" class="btn-historia">Saiba mais...</a>
      </div>
    </div>
  </section>


  <!-- rodapé -->
  <footer>
    <?php require_once "_parts/_footer.php"; ?>
  </footer>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>