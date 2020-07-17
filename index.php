<!DOCTYPE html>
<head>
  <?php require_once 'importsCss.php'?>
  <link rel="stylesheet" href="css/style.css">

  <title>Bookas</title>
  <link rel="icon" href="https://image.flaticon.com/icons/svg/3145/3145405.svg">
</head>

<body>
  <?php require_once 'nav.php'; ?>

  <section id="home" class="d-flex">
    <div class="container align-self-center">
      <div class="row">
        <div class="col-md-12 capa">

          <div id="carousel" class="carousel slide" data-ride="carousel">

            <!--Conteudos-->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1>Os Títulos mais aclamados</h1>
                <a href="livrosCards.php" class="btn btn-lg btn-custom btn-veja">
                  Veja agora
                </a>
              </div>
              <div class="carousel-item">
                <h1>Cria sua própria categoria</h1>
                <a href="generos.php" class="btn btn-lg btn-custom btn-veja">
                  <i class="fas fa fa-music"></i> Criar agora
                </a>
              </div>
              <div class="carousel-item">
                <h1>Cadastre seus Livros favoritos</h1>
                <a href="livros.php" class="btn btn-lg btn-custom btn-veja">
                  Cadastrar agora
                </a>
              </div>
            </div>

            <!--Controles-->
            <a href="#carousel" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="destaques" class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row text">
            <div class="col-md-12">
              <h2>Destaques Bookas</h2>
              <p>Os destaques da semana pra você</p>
            </div>
          </div>
          <div class="row livros">
            <div class="col-md-6">
              <a href="">
                <img src="https://img.wook.pt/images/tempestade-de-guerra-victoria-aveyard/MXwyMzUwNjY1M3wxOTQ3MzA2NHwxNTcxMDA3NjAwMDAw/500x"
                  class="img-fluid d-none d-md-block" alt="Imagem1">
              </a>
            </div>
            <div class="col-md-6">
            <a href="">
                <img src="https://rotinadoleitor.com.br/wp-content/uploads/2019/01/confira-a-capa-do-ultimo-livro-que-encerra-a-serie-rainha-vermelha.png"
                  class="img-fluid d-none d-md-block" alt="Imagem1">
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="info" class="caixa">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Venha para Bookas</h2>
        </div>
      </div>
    </div>
  </section>

  <?php require_once 'footer.php'; ?>

  <?php require_once 'importsJS.php'; ?>

</body>

</html>