<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getProduct = getFoodByCategory("Breakfast");
    
?>


<div class="row">
<div class=" p-4">
    <a href="process/create_product_html.php" class="btn btn-primary"> Add Product +</a>
</div>
<?php foreach($getProduct as $break): ?>

  <div class="col-sm-6">
    <div class="card mt-4 p-3">
      <div class="card-body">
        <img src="<?=$break['image']?>" alt="">
        <h5 class="card-title"><?=$break['proName']?></h5>
        <p class="card-text"><?=$break['proDescript']?></p>
        <a href="#" class="btn btn-primary"><?=$break['price']?> $</a>
        <strong class = "d-flex justity-content-end"><?=$break['proCode']?></strong>
        <h5><?=$break['date']?></h5>
      </div>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$break['pro_id']?>&page=break" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$break['pro_id']?>&page=break" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
   




        
    

    