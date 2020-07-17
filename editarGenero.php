<?php
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_generos WHERE Id_Genero=$id";
  $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
  $resultado = $conexao->query($query);
  $lista = $resultado->fetchAll();
  $nome = "";
  for($i=0; $i<count($lista); $i++){
    $nome = $lista[$i]['Genero'];
  }
?>

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
      <h4 class="mb-3 mt-4">Editar gênero</h4>
      <form class="needs-validation" action="editarGeneroUpdate.php?id=<?php echo $id?>" method="post">
        <div class="mb-3">
          <label for="endereco">Nome do Gênero</label>
          <input type="text" class="form-control" value="<?php echo $nome;?>" id="genero" name="genero" placeholder="Nome do gênero" required autofocus>
          <div class="invalid-feedback">
            Por favor, insira o nome da categoria.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-dark btn-lg btn-block" type="submit">Editar gênero</button>
      </form>
  </div>
      
</main>

<?php require_once 'footer.php' ?>

<?php require_once 'importsJS.php'; ?>
</body>
</html>