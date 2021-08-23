<?php
   
    require_once('inc/database.php');
    $id = $_GET['id'];
    $getDetail = getDetail($id);
    foreach ($getDetail as $detail):
?>

<div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
        <button class="btn btn-primary" onclick="window.history.back()" type="button"> Back</button>
    </div>
    <div class="card mb-3">
        <div class="card-body">
            <img src="process/assets/image/<?=$detail['image']?>" class="img-fluid" alt="">
            <h1 calss="display-4"><?=$detail['proName']?></h1>
            <p><?=$detail['proDescript']?></p>


            <?php if($detail['cateName'] == 'Dinner'):?>
                <span class="badge badge-primary"><?=$detail['cateName']?></span>
            <?php elseif($detail['cateName'] == 'Lunch'):?>
                <span class="badge badge-danger"><?=$detail['cateName']?></span>
            <?php else: ?>
                <span class="badge badge-warning"><?=$detail['cateName']?></span>
            <?php endif; ?>
                                    

        </div>
    </div>
</div>
<?php endforeach; ?>






