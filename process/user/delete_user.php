<?php 
    require_once('../../inc/database.php');
    $getId = $_GET['id'];
   
    delete($getId,"users",'user_id');
    header("Location: http://localhost/sopheakvon-php-project/?page=user");
    


   
?>