<?php
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_generos WHERE Id_Genero = $id";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=db_biblioteca','IgorMarchi','igortem14');
    $conexao->exec($query);
    header('Location: generos.php');
?>