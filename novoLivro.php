<?php 
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');

    $query = "SELECT * FROM tbl_generos";
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
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
      <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adicionar novo produto</h4>
          <form class="needs-validation" action="novoLivroPost.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-5">
              <label for="categoria">Gênero</label>
              <select class="custom-select d-block w-100" id="categoria" name="genero" >
                <?php for($i=0; $i<count($lista); $i++){?>
                <option value="<?php echo $lista[$i]['Id_Genero'];?>"><?php echo $lista[$i]['Genero'];?></option>
                <?php }?>
              </select>
              <div class="invalid-feedback">
                Por favor, escolha uma categoria válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Titulo</label>
              <input type="text" class="form-control" id="primeiroNome" name="titulo" placeholder="" value="" >
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Nome do Autor</label>
              <input type="text" class="form-control" id="primeiroNome" name="nomeAutor" placeholder="" value="" >
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Preço</label>
              <input type="number" class="form-control" id="primeiroNome" name="preco" placeholder="" value="" >
              <div class="invalid-feedback">
                É obrigatório inserir um preço válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Data</label>
              <input type="text" class="form-control" id="primeiroNome" name="data" placeholder="XXXX-XX-XX" value="" >
              <div class="invalid-feedback">
                É obrigatório inserir um preço válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Sinopse</label>
              <textarea class="form-control" id="sinopse" name="sinopse" rows="3" value=""></textarea>
              <div class="invalid-feedback">
                É obrigatório inserir uma descrição válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Imagem Capa</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="imagem" required>
                <label class="custom-file-label" for="customFile">Escolha uma imagem</label>
              </div>
              <div class="invalid-feedback">
                É obrigatório inserir uma imagem válida.
              </div>
            </div>
            
            
            <hr class="mb-4">
            <button class="btn btn-dark btn-lg btn-block" type="submit">Salvar Livro</button>
          </form>
        </div>
      </div>
      
    </main>

    <?php require_once 'footer.php' ?>
    <?php require_once 'importsJS.php'; ?>
  </body>
</html>
