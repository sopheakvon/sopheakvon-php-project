<?php
    require_once('partial/header.php');
    require_once('inc/database.php');
    $getProduct = getFoodByCategory("Breakfast");
    
?>
<br>
<div class="card mb-4">
        <div class="card-body">
            <div class="small text-muted">January 1, 2021</div>
                  <h2 class="card-title">Featured Post Title</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                  <a class="btn btn-primary" href="#!">Promotion!!</a>
            </div>
        </div>
<div class="row">
<?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
<div class=" p-4">
    <a href="process/create_product_html.php?page=break" class="btn btn-primary"> Add Product +</a>
</div>
<?php endif; ?>
<?php foreach($getProduct as $break): ?>

  <div class="col-sm-3">
    <div class="card mt-4 p-3">
      <div class="card-body">
        <img src="process/assets/image/<?=$break['image']?>" alt="" class="img-fluid" width="300"/>
        <h5 class="card-title"><?=$break['proName']?></h5>
        <p class="card-text"><?=$break['proDescript']?></p>
       
       
        
      </div>
      <a href="#" class="btn btn-primary"><?=$break['price']?> $</a>
      <div class="d-flex justify-content-end">
            
            <p><?=$break['date']?></p>
      </div>
      <?php if(isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
        <div class="action d-flex justify-content-end">
            <a href="process/update_product_html.php?id=<?=$break['pro_id']?>&page=break" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
            <a href="process/delete_product.php?id=<?=$break['pro_id']?>&page=break" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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




        
    

    