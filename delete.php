<?php
    include("connection.php");
    
    // if(isset()){

    // }

    $id = intval($_GET['id']);

    $sql = $connection->query("DELETE FROM `drugs` WHERE `id` = '$id'");
    header("location: index.php");





?>