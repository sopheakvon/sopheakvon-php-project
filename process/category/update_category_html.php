<?php
    require_once('../../partial/header.php');
    require_once('../../inc/database.php');
    $id = $_GET['id'];
    $selectCategory = selectCate($id);
    foreach($selectCategory as $category):
?>

<div class="container p-3 mt-3">
   
    <form action="update_category_model.php" method="post">
        <input type="hidden" name = "id" value="<?=$category['cate_id']?>">
        <div class="form-group">
            <input type="text" name="cateName" placeholder="Category Name..." class="form-control" value="<?=$category['cateName']?>">
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary" type="submit"> Update </button>
        </div>
    </form>
   
</div>
<?php endforeach; ?>