
<?php 
    require_once('../partial/header.php');
    require_once('../inc/database.php');
    $id = $_GET['id'];
    $selectProduct = selectProduct($id);
    foreach($selectProduct as $product):
    
    
       
    
?>
<div class="container p-4">
    
    
        <form action="update_product_model.php" method="post">
            <input type="hidden" name='id' value="<?=$product['pro_id']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="proname" name="proname" value="<?=$product['proName']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price.." name="price" value="<?=$product['price']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Product Code.." name="code" value="<?=$product['proCode']?>">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file border" name="image" >
            </div>
            <div class="form-group">
               <textarea class="form-control" placeholder="Product Description..." name="prodescript"  cols="10" rows="5" ><?=$product['proDescript']?></textarea>
            </div>
            <div class="form-group">
               <select name="cateID" class="form-control" id="">
                    <?php 
                        $getCategory = getCategory();
                        foreach($getCategory as $category):
                            if($category['cate_id'] == $product['cate_id']):

                        
                    ?>
                    <option selected value="<?=$category['cate_id']?>"><?=$category['cateName']?></option>
                    <?php else: ?>
                    <option value="<?=$category['cate_id']?>"><?=$category['cateName']?></option>
                    <?php endif; endforeach; ?>
               </select>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
            </div>
        </form>
    </div>
    <?php endforeach; ?>


<?php require_once('../partial/footer.php') ?>