<?php
    
    require_once('inc/database.php');
?>

        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success !</strong> <?= $_SESSION['message'] ?>
                </div>
            <?php endif; ?>
                <div class="text-center ">
                    <h1 class="fw-bolder">P_Restaurant</h1>
                    <p class="lead mb-0">Welcome to Food online!</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">

            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img  class="card-img-top" src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_630,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/hamajvt1mkuyvrshy4bb/Pastry%20Class%20at%20Thai%20Chef%20School%20.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2021</div>
                            <h2 class="card-title">Pastry Class at Thai Chef School</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                    <?php 
                        require_once('inc/database.php');
                        $getAllProduct = "";
                       
                        if($_SERVER['REQUEST_METHOD'] =='POST'){
                            $getAllProduct  = SearchByTitle($_POST);
                
                        }else{
                            $getAllProduct = getAllProducts();
                        }

                        foreach($getAllProduct as $product):

                     ?>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href=""><img class="card-img-top" src="process/assets/image/<?=$product['image']?>" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?=$product['date']?></div>
                                    <h2 class="card-title h4"><?=$product['proName']?></h2>
                                    <p class="card-text"><?=$product['proDescript']?></p>
                                    
                                    <?php if($product['cateName'] == 'Dinner'):?>
                                    <span class="badge badge-primary"><?=$product['cateName']?></span>
                                    <?php elseif($product['cateName'] == 'Lunch'):?>
                                    <span class="badge badge-danger"><?=$product['cateName']?></span>
                                    <?php else: ?>
                                    <span class="badge badge-warning"><?=$product['cateName']?></span>
                                    <?php endif; ?>
                                    <hr>
                                    <a class="btn btn-primary" href="?page=detail&id=<?=$product['pro_id']?>">Read more →</a>
                                </div>
                            </div>
                            
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                           
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Choose food you like</div>
                        <div class="card-body">
                        <form action="" method="post">
                            <div class="input-group" >
                                <input class="form-control" type="text" placeholder="Search for food items..." name="title" />
                                <button class="btn btn-primary" type="submit" id="button-search" >Search</button>
                            </div>
                        </form>
                            
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="detail_Food/fastfood.php">Fast Food</a></li>
                                        <li><a href="detail_Food/food_and_drink.php">Food and Drink</a></li>
                                        <li><a href="detail_Food/delicious_food.php">Diet Food</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="detail_Food/orange_juice.php">Orange Juice</a></li>
                                        <li><a href="detail_Food/apple_juice.php">Apple Juice</a></li>
                                        <li><a href="detail_Food/milk_tea.php">Milk Tea</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    

