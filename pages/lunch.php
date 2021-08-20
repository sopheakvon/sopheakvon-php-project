<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getlunchs = getFoodByCategory("Lunch");
    
?>
<div class="row">
<?php foreach($getlunchs as $lunch): ?>
  <div class="col-sm-6">
    <div class="card mt-2 p-4">
      <div class="card-body">
        <img src="<?=$lunch['image']?>" alt="">
        <h5 class="card-title"><?=$lunch['proName']?></h5>
        <p class="card-text"><?=$lunch['proDescript']?></p>
        <a href="#" class="btn btn-primary"><?=$lunch['price']?> $</a>
      </div>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$lunch['pro_id']?>&page=lunch" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$lunch['pro_id']?>&page=lunch" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </div>
    </div>
  </div>
<?php endforeach; ?>
</div>