<?php 
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT l.Id_Livro, l.Nome_Livro, l.Preco_Livro, l.Nome_Autor, l.Data_Pub, g.Genero tbl_generos, l.Livro_Sinopse, l.Imagem
              FROM db_biblioteca.tbl_livro as l, db_biblioteca.tbl_generos as g 
              WHERE l.Id_Genero = g.Id_Genero";
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
?>
<!DOCTYPE html>
<head>
  <?php require_once 'importsCss.php'?>
  <link rel="stylesheet" href="css/cards.css">
  
  
  <title>Document</title>
</head>
<body>
<div class="container-fluid">
  <?php require_once 'nav.php' ?>
    
  <section class="container">
  <h1 class="text-center mb-3">Bookas Livros</h1>
    <div class="row  justify-content-center">
     <?php for($i=0; $i<count($lista); $i++){?>
        <div class="card">
          <img class="card-img-top" src="/imagens/upload/<?php echo $lista[$i]['Imagem'];?>" alt="Imagem de capa do card">
          <div class="card-body">
            <h3 class="card-title"><?php echo $lista[$i]['Nome_Livro'];?></h3>
            <h5 class="card-title"><?php echo $lista[$i]['Nome_Autor'];?></h5>
            <p class="card-text">Gênero: <b><?php echo $lista[$i]['tbl_generos'];?></b></p>
            <p class="card-text"><?php echo $lista[$i]['Livro_Sinopse'];?></p>
            <a href="#" class="btn btn-dark">R$<?php echo $lista[$i]['Preco_Livro'];?>,00</a>
          </div>
        </div>
      <?php }?>
    </div>
  </section>
</div>

<?php require_once 'footer.php' ?>
<?php require_once 'importsJS.php'; ?>
</body>
</html>