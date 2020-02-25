<?php
    session_start();

    // ID товара
    $_SESSION['id'] = $_POST['id'];
    // Кол-во товара
    $_SESSION['count'] = $_POST['count'];

    if(isset($_SESSION['id']) and is_numeric($_SESSION['count'])){
        echo $_SESSION['id'];
        echo $_SESSION['count'];
    }
?>