
<?php 
    require_once('../partial/header.php');
    
?>
<div class="container p-4">
    <?php require_once('../inc/database.php') ?>
    
        <form action="create_product_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="proname" name="proname">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price.." name="price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Code.." name="code">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file border" name="image">
            </div>
            <div class="form-group">
               <textarea class="form-control" placeholder="Product Description..." name="prodescript" cols="10" rows="5"></textarea>
            </div>
            <div class="form-group">
               <select name="cateID" class="form-control" id="">
                    <?php 
                        $getCategory = getCategory();
                        foreach($getCategory as $category):
                        
                    ?>
                    
                    <option value="<?=$category['cate_id']?>"><?=$category['cateName']?></option>
                    <?php endforeach; ?>
               </select>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>


<?php require_once('../partial/footer.php') ?>