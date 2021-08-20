<?php 
    require_once('../inc/database.php');
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        updateProduct($_POST);
        $pages = $_GET['page'];
        if($pages == "break"){
            header("Location: http://localhost/sopheakvon-php-project/?page=break");

        }elseif($pages == 'lunch'){
            header("Location: http://localhost/sopheakvon-php-project/?page=lunch");
        }else{
            header("Location: http://localhost/sopheakvon-php-project/?page=dinner");
        }


    }
?>