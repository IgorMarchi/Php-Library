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
  <link rel="stylesheet" href="css/generos.css">
  
  
  <title>Document</title>
</head>
<body>
<?php require_once 'nav.php' ?>

<section class="container">
  <p class="lead">Aqui vai os Livros</p>
  <a class="btn btn-dark btn-lg mb-4 mt-4" href="novoLivro.php">Adicione novos Livros</a>
  <table class="table">
  <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Genero</th>
            <th scope="col">Publicação</th>
            <th scope="col">Nome</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Imagem</th>
            <th style="width: 10%" scope="col">Alterar</th>
            <th style="width: 10%" scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        <?php for($i=0; $i<count($lista); $i++){?>
          <tr>
            <th scope="row"><?php echo $lista[$i]['Id_Livro'];?></th>
            <td><?php echo $lista[$i]['tbl_generos'];?></td>
            <td><?php echo $lista[$i]['Data_Pub'];?></td>
            <td><?php echo $lista[$i]['Nome_Livro'];?></td>
            <td><?php echo $lista[$i]['Nome_Autor'];?></td>
            <td><?php echo $lista[$i]['Preco_Livro'];?></td>
            <td><?php echo $lista[$i]['Imagem'];?></td>
            <td><a href="editarLivro.php?id=<?php echo $lista[$i]['Id_Livro'];?>" class="btn btn-warning">Alterar</a></td>
            <td><a href="excluirLivroPost.php?id=<?php echo $lista[$i]['Id_Livro'];?>" class="btn btn-danger">Remover</a></td>
          </tr>
        <?php }?>
        </tbody>
      </table>
</section>

<?php require_once 'footer.php' ?>
<?php require_once 'importsJS.php'; ?>
</body>
</html>