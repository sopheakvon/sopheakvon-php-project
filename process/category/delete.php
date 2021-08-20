<?php 
    require_once('../../inc/database.php');
    $getId = $_GET['id'];
   
    delete($getId,"category",'cate_id');
    header("Location: http://localhost/sopheakvon-php-project/?page=category");
    


   
?>