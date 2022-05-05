<?php
    include_once "config.php";
    $idPerson = $_GET['idPerson'];
    $idTache = $_GET['idTache'];
    $sql = mysqli_query($conn, "UPDATE taches set idPerson = $idPerson  WHERE idTache = $idTache"); 
?>