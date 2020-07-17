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

<section class="container">
  <p class="lead">Aqui vai os Generos</p>
  <a class="btn btn-dark btn-lg mb-4 mt-4" href="novoGenero.php">Adicione novos Gêneros</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Gênero</th>
        <th style="width: 10%" scope="col">Alterar</th>
        <th style="width: 10%" scope="col">Remover</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0; $i<count($lista); $i++){?>
        <tr>
          <th scope="row"><?php echo $lista[$i]['Id_Genero'];?></th>
          <td><?php echo $lista[$i]['Genero'];?></td>
          <td><a href="editarGenero.php?id=<?php echo $lista[$i]['Id_Genero'];?>" class="btn btn-warning">Alterar</a></td>
          <td><a href="excluirCategoriaPost.php?id=<?php echo $lista[$i]['Id_Genero'];?>" class="btn btn-danger">Remover</a></td>
        </tr>
      <?php }?>

    </tbody>
  </table>
</section>

<?php require_once 'footer.php' ?>
<?php require_once 'importsJS.php'; ?>
</body>
</html>