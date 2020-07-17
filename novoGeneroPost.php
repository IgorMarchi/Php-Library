<?php 
    $genero = $_POST["genero"];
    echo "Quero cadastrar o seguinte gênero: $genero <br>";

    // Conexão com BD
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $smmt = $conexao->prepare("INSERT INTO tbl_generos (genero) VALUES (:genero)");
    $smmt->bindParam(':genero', $genero);
    $smmt->execute();

    header('Location: generos.php');
    
?>