<?php
require_once('../../inc/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createCategory($_POST);
    header("Location: http://localhost/sopheakvon-php-project/?page=category");
}