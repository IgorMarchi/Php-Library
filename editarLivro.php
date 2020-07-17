<?php 
    $conexao2 = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');

    $query2 = "SELECT * FROM tbl_generos";
    $resultado2 = $conexao2->query($query2);
    $lista2 = $resultado2->fetchAll();
   
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_livro WHERE Id_Livro=$id";
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    $Nome_Autor = "";
    $Nome_Livro = "";
    $Preco_Livro = "";
    $Livro_Sinopse = "";
    $Data_Pub = "";
    $Id_Genero = "";
    for($i=0; $i<count($lista); $i++){
      $Nome_Livro = $lista[$i]['Nome_Livro'];
      $Preco_Livro = $lista[$i]['Preco_Livro'];
      $Livro_Sinopse = $lista[$i]['Livro_Sinopse'];
      $Data_Pub = $lista[$i]['Data_Pub'];
      $Nome_Autor = $lista[$i]['Nome_Autor'];
      $Id_Genero = $lista[$i]['Id_Genero'];
    }
?>
<?php
  
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
          <h4 class="mb-3">Adicionar novo livro</h4>
          <form class="needs-validation" action="editarLivroUpdate.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-5">
              <label for="categoria">Gênero</label>
              <select class="custom-select d-block w-100" id="categoria" name="genero" >
                <?php for($i=0; $i<count($lista2); $i++){?>
                <option <?php if($Id_Genero == $lista2[$i]['Id_Genero'] ){ echo 'selected';} ?> value="<?php echo $lista2[$i]['Id_Genero'];?>"><?php echo $lista2[$i]['Genero'];?></option>
                <?php }?>
              </select>
              <div class="invalid-feedback">
                Por favor, escolha uma categoria válida.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Titulo</label>
              <input type="text" class="form-control" id="primeiroNome" name="titulo" placeholder="" value="<?php echo $Nome_Livro;?>" >
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Nome do Autor</label>
              <input type="text" class="form-control" id="primeiroNome" name="nomeAutor" placeholder="" value="<?php echo $Nome_Autor;?>" >
              <div class="invalid-feedback">
                É obrigatório inserir um nome válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Preço</label>
              <input type="number" class="form-control" id="primeiroNome" name="preco" placeholder="" value="<?php echo $Preco_Livro;?>" >
              <div class="invalid-feedback">
                É obrigatório inserir um preço válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Data</label>
              <input type="text" class="form-control" id="primeiroNome" name="data" placeholder="XXXX-XX-XX" value="<?php echo $Data_Pub;?>" >
              <div class="invalid-feedback">
                É obrigatório inserir um preço válido.
              </div>
            </div>

            <div class="mb-3">
              <label for="primeiroNome">Sinopse</label>
              <textarea class="form-control" id="sinopse" name="sinopse" rows="3"><?php echo $Livro_Sinopse;?></textarea>
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
