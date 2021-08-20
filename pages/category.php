<div class="container p-3 mt-3">
<?php require_once('inc/database.php'); ?>
    <table class="table table-bordered">
        <tr>
            <th>CatoryId</th>
            <th>CategoryName</th>
            <th>Action</th>
            
        </tr>
        <?php 
            $categorys = getCategory();
            foreach($categorys as $cate):
         ?>
        <tr>
            <td><?=$cate['cate_id']?></td>
            <td><?=$cate['cateName']?></td>
            
            <td>
                <a href="" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
                <a href="process/category/delete.php?id=<?=$cate['cate_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>