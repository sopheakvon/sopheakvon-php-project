<?php 
    require_once('../inc/database.php');
    $getId = $_GET['id'];
    delete($getId,"products",'pro_id');
    $pages = $_GET['page'];
    if($pages == "break"){
        header("Location: http://localhost/sopheakvon-php-project/?page=break");

    }elseif($pages == 'lunch'){
        header("Location: http://localhost/sopheakvon-php-project/?page=lunch");
    }elseif($pages == 'dinner'){
        header("Location: http://localhost/sopheakvon-php-project/?page=dinner");
    }


   
?>