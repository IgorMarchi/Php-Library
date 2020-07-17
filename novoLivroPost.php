<?php 
    $nomeImagem = $_FILES["imagem"]['name'];
    $arquivo = $_FILES["imagem"]['tmp_name'];
    $destino = 'imagens/upload/' . $nomeImagem;

    if(move_uploaded_file($arquivo, $destino)){
        echo "Imagem salva com sucesso";
    } else {
        echo "Não consegui salvar";
    }

    $titulo= $_POST["titulo"];
    $genero = $_POST["genero"];
    $preco = $_POST["preco"];
    $sinopse = htmlspecialchars($_POST['sinopse']);
    $data = $_POST["data"];
    $nomeAutor = $_POST["nomeAutor"];

    echo "Quero cadastrar o seguinte Livro: $titulo <br>";

    // Conexão com BD
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $smmt = $conexao->prepare( "INSERT INTO tbl_livro (Id_Genero, Nome_Livro, Preco_Livro, Livro_Sinopse, imagem, Data_Pub, Nome_Autor) 
                                VALUES (:Id_Genero, :Nome_Livro, :Preco_Livro, :Livro_Sinopse, :imagem, :Data_Pub, :Nome_Autor)");
    $smmt->bindParam(':Nome_Livro', $titulo);
    $smmt->bindParam(':Id_Genero', $genero);
    $smmt->bindParam(':Preco_Livro', $preco);
    $smmt->bindParam(':Livro_Sinopse', $sinopse);
    $smmt->bindParam(':imagem', $nomeImagem);
    $smmt->bindParam(':Data_Pub', $data);
    $smmt->bindParam(':Nome_Autor', $nomeAutor);

    $smmt->execute();

    header('Location: livros.php');
?>