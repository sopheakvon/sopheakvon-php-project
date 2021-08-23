<!-- Responsive navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">P_Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=break">Breakfast</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=lunch">Lunch</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=dinner">Dinner</a></li>
                        
                        <?php if (isset($_SESSION['role']) and $_SESSION['role'] == 'admin') : ?>
                        <li class="nav-item"><a class="nav-link" href="?page=category">Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=user">Users</a></li>
                        
                        <?php endif; ?>
                        <?php if (isset($_SESSION['user'])) : ?>
                        <li class="nav-item"><a class="nav-link" href="?page=logout">Logout</a></li>
                        <span class="navbar-text">
                            <?= $_SESSION['user'] ?>
                        </span>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
</nav>