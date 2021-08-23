<?php 
    require_once('../inc/database.php');
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        createProduct($_POST);
        $pages = $_POST['page'];
        if($pages == "break"){
            header("Location: http://localhost/sopheakvon-php-project/?page=break");
    
        }elseif($pages == 'lunch'){
            header("Location: http://localhost/sopheakvon-php-project/?page=lunch");
        }elseif($pages == 'dinner'){
            header("Location: http://localhost/sopheakvon-php-project/?page=dinner");
        }
    }
?>