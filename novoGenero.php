<!DOCTYPE html>
<head>
  <?php require_once 'importsCss.php'?>
  <link rel="stylesheet" href="css/generos.css">
  
  <title>Document</title>
</head>
<body>

<?php require_once 'nav.php' ?>

<main role="main" class="container">
  <div class="col-md-12 order-md-1 mt-4">
      <h4 class="mb-3 mt-4">Adicionar novo gênero</h4>
      <form class="needs-validation" action="novoGeneroPost.php" method="post">
        <div class="mb-3">
          <label for="endereco">Nome do Gênero</label>
          <input type="text" class="form-control" id="genero" name="genero" placeholder="Nome do gênero" required autofocus>
          <div class="invalid-feedback">
            Por favor, insira o nome da categoria.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-dark btn-lg btn-block" type="submit">Cadastrar categoria</button>
      </form>
  </div>
      
</main>

<?php require_once 'footer.php' ?>
<?php require_once 'importsJS.php'; ?>
</body>
</html>