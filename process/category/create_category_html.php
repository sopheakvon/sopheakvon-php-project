<?php
    require_once('../../partial/header.php');
    require_once('../../inc/database.php');
    
?>

<div class="container p-3 mt-3">
    <form action="create_category_model.php" method="post">
        
        <div class="form-group">
            <input type="text" name="cateName" placeholder="Category Name..." class="form-control">
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary" type="submit"> Create </button>
        </div>
    </form>
   
</div>