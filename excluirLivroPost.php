<?php
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_livro WHERE Id_Livro = $id";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
    $conexao->exec($query);
    header('Location: livros.php');
?>