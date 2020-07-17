<?php

    $nomeImagem = $_FILES["imagem"]['name'];
    $arquivo = $_FILES["imagem"]['tmp_name'];
    $destino = 'imagens/upload/' . $nomeImagem;

    if(move_uploaded_file($arquivo, $destino)){
        echo "Imagem salva com sucesso";
    } else {
        echo "Não consegui salvar";
    }

    $id = $_GET['id'];
    $Id_Genero = $_POST['genero'];
    $Nome_Livro = $_POST['titulo'];
    $Nome_Autor = $_POST['nomeAutor'];
    $Preco_Livro = $_POST['preco'];
    $Data_Pub = $_POST['data'];
    $Livro_Sinopse = htmlspecialchars($_POST['sinopse']);

    $query = "UPDATE tbl_livro SET Nome_Livro = '$Nome_Livro', Id_Genero='$Id_Genero', Livro_Sinopse='$Livro_Sinopse', Preco_Livro='$Preco_Livro', Imagem='$nomeImagem' WHERE Id_Livro = $id";
    
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec($query);
    
    header('Location: livros.php');

?>