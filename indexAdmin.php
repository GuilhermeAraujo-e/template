<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="shortcut icon" href="Images/coguvaca.png" type="image/x-icon">
    <title>ProgramaçãoWeb/Empreendendorismo</title>
</head>

<body>
    <!-- nosso cabeçalho -->
    <header>
        <h1>Empreendedorismo DGMR</h1>
            <p>PÁGINA DE ADMINISTRAÇÃO</p>
    </header>
    <!-- menu de navegação -->
     <nav>
        <a href="#">Categorias</a>
        <a href="#">Clientes</a>
        <a href="#">Empresa</a>
        <a href="#">Página Inicial</a>
        <a href="#">Produtos</a>
        <a href="#">Usuários</a>
     </nav>

     <main>
        <div class="dest">
            Projeto de Empreendendorismo da nata!
        </div>

        <section id="Integrantes">
          <div class="bloco">
      <div class="container py-5 row">
          <div class=" col-md-6 pe-md-5 mb-4 mb-md-0">
            <h2 class="mb-3">Integrantes</h2>
            <ul>
                <li>Danilo Hydalgo</li>
                <li>Gabriel Fonseca</li>
                <li>Miguel Evangelista</li>
                <li>Rubens Domingos</li>
            </ul>
          </div>
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
          </div>
        </section>

        <section id="Atividade">
            <div class="container">
              <div class="bloco">
                <img src="Images/atividade.png" alt="Atividade do projeto">
                <div class="texto">
            <h2>Atividades de Criação</h2>
            <ul>
                <li>Página Inicial (index.php).</li>
                <li>Página de Cadastro da Empresa.</li>
                <li>Página de Cadastro de Usuário (com papeis).</li>
                <li>Página de Cadastro de Clientes.</li>
            </ul>
            </div>
            </div>
            </div>
        </section>

        <section id="Liderança">
            <div class="container">
              <div class="bloco">
                <img src="Images/lider.png" alt="Liderança do projeto">
                <div class="texto">
            <h2>Liderança</h2>
            <ul>
                <li>Cada Grupo deve ter um líder, que será responsável: </li>
                <li>Coordenar a divisão das tarefas;</li>
                <li>Registrar no arquivo README.md, indicando quem ficou com cada parte do sistema;</li>
                <li>Gerenciar a Branch main;</li>
            </ul>
            </div>
            </div>
            </div>
        </section>

        <section id="Uso do Git">
            <div class="container">
              <div class="bloco">
                <img src="Images/git.png" alt="Uso do Git">
                <div class="texto">
            <h2>Uso do Git</h2>
           <ul>
                <li>Todos os Arquivos devem ser versionados com o GIT, Utilizando um repositório compartilhado.</li>
                <li>Não é permitido que dois integrantes do grupo editem o mesmo arquivo, para evitar conflito e código.</li>
                <li>Usem nomes distintos de arquivos ou diretórios pra facilitar a organização.</li>
            </ul>
            </div>
            </div>
            </div>
        </section>

        <section id="PHP e OB">
            <div class="container">
              <div class="bloco">
                <img src="Images/php.png" alt="PHP e OB">
                <div class="texto">
            <h2>PHP/OB</h2>
           <ul>
                <li>As interações com banco de dados devem ser implementadas com a utilização de Classes em PHP.</li>
                <li>Deve-se usar herança do CRUD.</li>
            </ul>
            </div>
            </div>
            </div>
        </section>
        <!-- Finalizamos o Main -->
     </main>

     <footer>
        <p>&copy; 2025 Fazenda Bezerra Evangelista - Todos os direitos reservados.</p>
     </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>

</html>