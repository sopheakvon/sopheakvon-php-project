<?php
    require_once('../inc/database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    userLogin($_POST);
}