<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
             }
    $outgoing_id = $_SESSION['unique_id'];
    $idEntreprise = $row['idEntreprise'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND idEntreprise = {$idEntreprise} AND state != 'no' ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>