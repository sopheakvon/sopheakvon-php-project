<?php
    require_once('partial/header.php');
    require_once('partial/navbar.php');

    if(isset($_GET['page'])){
        if($_GET['page'] == 'home'){
            require_once('pages/home.php');
        }elseif($_GET['page'] == 'break'){
            require_once('pages/breakfast.php');
        }elseif($_GET['page'] == 'lunch'){
            require_once('pages/lunch.php');
        }elseif($_GET['page'] == 'dinner'){
            require_once('pages/dinner.php');
        }elseif($_GET['page'] == 'category'){
            require_once('pages/category.php');
        }elseif($_GET['page'] == 'user'){
            require_once('pages/user.php');
        }
    }else{
        require_once('pages/home.php');

    }
    require_once('partial/footer.php');
?>