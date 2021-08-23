<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getdinners = getFoodByCategory("Dinner");
    
?>
<div class="row">
<?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
<div class=" p-4">
    <a href="process/create_product_html.php?page=dinner" class="btn btn-primary"> Add Product +</a>
</div>
<?php endif; ?>
<?php foreach($getdinners as $dinner): ?>
  <div class="col-sm-3">

    <div class="card mt-2 p-4">
      <div class="card-body">
        <img src="process/assets/image/<?=$dinner['image']?>" alt="" class="img-fluid" width="400">
        <h5 class="card-title"><?=$dinner['proName']?></h5>
        <p class="card-text"><?=$dinner['proDescript']?></p>
        
      </div>
      
      <a href="#" class="btn btn-primary"><?=$dinner['price']?> $</a>
      <div class="d-flex justify-content-end">
            <p><?=$dinner['date']?></p>
      </div>
      <?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$dinner['pro_id']?>&page=dinner" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$dinner['pro_id']?>&page=dinner" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </div>
      <?php endif; ?>
          
            
    </div>
    
  </div>
<?php endforeach; ?>
</div>
<footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
