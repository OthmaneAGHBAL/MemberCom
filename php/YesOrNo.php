<?php
    include_once "config.php";
    $id = $_GET['id'];
    $ordre=$_GET['ordre'];
    if(strcmp($ordre,"yes") == 0){
        $sql = mysqli_query($conn, "UPDATE users set state = 'user' WHERE unique_id = $id"); 
        echo 'yes';
    }else{
        $sql = mysqli_query($conn, "DELETE FROM users  WHERE unique_id = $id");
        echo 'no';
    }

?>