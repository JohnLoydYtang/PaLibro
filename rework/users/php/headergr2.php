<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="cart2.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket" style="padding-left: 30%;"></i> GRADE 2
            </h3>
        </a>
        <!-- menu button -->
        <div class="menu-btn">
            <i class="fas fa-bars" style="color:white;"></i>
        </div>
        <div class="side-bar">
            <!-- header -->
            <header>
                <!-- close button -->
                <div class="close-btn">
                    <i class="fas fa-times"></i>
                </div>
                <img src="css/PaLibro.jpg" alt="">
                <!-- logo -->
                <h1 style="color:white;">PaLibro</h1>
                <div class="main_content" style="text-align: center;">
                    <a href="user_profile.php" style="text-decoration:none;">
                        <div class="header" style="color:white;">Welcome <?php echo $_SESSION['user_name']; ?></div>
                    </a> <br>
                </div>
            </header>
            <!-- #Menu-->
            <div class="menu">
                <div class="item"><a href="user_page.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
                <div class="item"><a href="viewOrderuser.php"><i class="fas fa-desktop"></i>View Cart</a></div>
                <div class="item"><a class="sub-btn"><i class="fas fa-table"></i>View (ELEM)
                        <!-- dropdown -->
                        <!-- dropdown arrow -->
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu">
                        <a href="cart.php" class="sub-item">Grade 1</a>
                        <a href="cart2.php" class="sub-item">Grade 2</a>
                        <a href="cart3.php" class="sub-item">Grade 3</a>
                        <a href="cart4.php" class="sub-item">Grade 4</a>
                        <a href="cart5.php" class="sub-item">Grade 5</a>
                        <a href="cart6.php" class="sub-item">Grade 6</a>
                    </div>
                </div>

                <div class="item"><a class="sub-btn"><i class="fas fa-th"></i>View (HS)
                        <!-- dropdown -->
                        <!-- dropdown arrow -->
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu">
                        <a href="cart7.php" class="sub-item">Grade 7</a>
                        <a href="cart8.php" class="sub-item">Grade 8</a>
                        <a href="cart9.php" class="sub-item">Grade 9</a>
                        <a href="cart10.php" class="sub-item">Grade 10</a>
                    </div>
                </div>
                <div class="item"><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i>Log-Out</a></div>
            </div>
        </div>
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // jquery expand collapse
                $('.menu-btn').click(function() {
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                });

                // close
                $('.close-btn').click(function() {
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                });

                // jquert for sub
                $('.sub-btn').click(function() {
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });
            })
        </script>
        <!-- cart -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
            <div class="mr-auto">
                <div class="navbar-nav" style="position: absolute; right: 0; top: 19%;">
                    <a href="checkout2.php" class="nav-item nav-link active">
                        <h5 class="px-5 cart">
                            <i class="fas fa-shopping-cart"></i>Cart
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                                echo "<span id='cart_count' class='text-warning bg-light'>$count</span>";
                            } else {
                                echo "<span id='cart_count' class='text-warning bg-light'>0</span>";
                            }
                            ?>
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>