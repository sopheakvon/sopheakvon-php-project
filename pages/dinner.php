<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getdinners = getFoodByCategory("Dinner");
    
?>
<div class="row">
<?php foreach($getdinners as $dinner): ?>
  <div class="col-sm-6">
    <div class="card mt-2 p-4">
      <div class="card-body">
        <img src="<?=$dinner['image']?>" alt="">
        <h5 class="card-title"><?=$dinner['proName']?></h5>
        <p class="card-text"><?=$dinner['proDescript']?></p>
        <a href="#" class="btn btn-primary"><?=$dinner['price']?> $</a>
      </div>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$dinner['pro_id']?>&page=dinner" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$dinner['pro_id']?>&page=dinner" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </div>
    </div>
  </div>
<?php endforeach; ?>
</div>