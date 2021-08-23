<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getlunchs = getFoodByCategory("Lunch");
    
?>
<div class="row">
<?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
<div class=" p-4">
    <a href="process/create_product_html.php?page=lunch" class="btn btn-primary"> Add Product +</a>
</div>
<?php endif; ?>
<?php foreach($getlunchs as $lunch): ?>
  <div class="col-sm-3">
    <div class="card mt-2 p-4">
      <div class="card-body">
        <img src="process/assets/image/<?=$lunch['image']?>" alt="" class="img-fluid" width="400">
        <h5 class="card-title"><?=$lunch['proName']?></h5>
        <p class="card-text"><?=$lunch['proDescript']?></p>
        
      </div>
      <a href="#" class="btn btn-primary"><?=$lunch['price']?> $</a>
      <div class="d-flex justify-content-end">
            <p><?=$lunch['date']?></p>
      </div>
      <?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$lunch['pro_id']?>&page=lunch" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$lunch['pro_id']?>&page=lunch" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
