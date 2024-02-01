<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="css/sidebarw/sidemenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-image: url('https://wallpapercave.com/wp/wp4766529.jpg');
      background-repeat: no-repeat;
      color: #000000;
      font-family: 'Avenir Next', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
        "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans",
        "Droid Sans", "Helvetica Neue", sans-serif;
      font-size: 18px;
      font-weight: 400;
      line-height: 1.8;
    }

    img {
      height: auto;
      max-width: 100%;
      border: 2px solid black;
      border-radius: 50% 50%
    }

    .button {
      background-color: #000000;
      border: 2px solid #000000;
      color: #ffffff;
      display: inline-block;
      font-size: 18px;
      font-weight: 600;
      margin: 0;
      padding: 12px 32px 14px 32px;
      text-decoration: none;
      text-transform: uppercase;
    }

    .button:hover {
      background-color: #ffffff;
      color: #000000;
    }

    .site-header {
      background-color: #FEDF9E;
      margin: 5%;
    }

    nav a {
      color: black;
      display: inline-block;
      margin: 0 4px;
      text-decoration: none;
    }

    nav a:first-child {
      margin: 0 4px 0 0;
    }

    main {
      margin: 0 5%;
    }

    .home-page {
      display: grid;
      font-size: 24px;
      grid-template-columns: 50% 50%;
      line-height: 1.4;
      margin: 2em auto 0 auto;
      max-width: 45em;
      padding: 0;
    }

    .home-page h1 {
      font-size: 1em;
      margin: 4em 0 0 0;
    }

    .home-page .button {
      margin: 1em 0;
    }

    footer {
      background-color: #000000;
      color: rgba(255, 255, 255, 0.6);
      padding: 2%;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;

    }

    @media screen and (max-width: 45em) {
      .home-page {
        display: block;
      }
    }
  </style>
</head>

<body>

  <!-- menu button -->
  <div class="menu-btn">
    <i class="fas fa-bars"></i>
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
        <a href="user_profileHS.php" style="text-decoration:none;">
          <div class="header" style="color:white;">Welcome <?php echo $_SESSION['admin_name']; ?></div>
        </a>
        <br>
      </div>
    </header>
    <!-- #Menu-->
    <div class="menu">
      <div class="item"><a href=""><i class="fas fa-desktop"></i>Dashboard</a></div>
      <div class="item"><a href="usermanage.php"><i class="fas fa-desktop"></i>User Manage</a></div>
      <div class="item"><a href="viewOrders.php"><i class="fas fa-desktop"></i>View Orders (ELEM)</a></div>
      <div class="item"><a href="viewOrdersHS.php"><i class="fas fa-desktop"></i>View Orders (HS)</a></div>
      <div class="item"><a class="sub-btn"><i class="fas fa-table"></i>View (ELEM)
          <!-- dropdown -->
          <!-- dropdown arrow -->
          <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
          <a href="viewProduct.php" class="sub-item">Grade 1</a>
          <a href="viewProductGr2.php" class="sub-item">Grade 2</a>
          <a href="viewProductGr3.php" class="sub-item">Grade 3</a>
          <a href="viewProductGr4.php" class="sub-item">Grade 4</a>
          <a href="viewProductGr5.php" class="sub-item">Grade 5</a>
          <a href="viewProductGr6.php" class="sub-item">Grade 6</a>
        </div>
      </div>

      <div class="item"><a class="sub-btn"><i class="fas fa-th"></i>View (HS)
          <!-- dropdown -->
          <!-- dropdown arrow -->
          <i class="fas fa-angle-right dropdown"></i>
        </a>
        <div class="sub-menu">
          <a href="viewProductHS.php" class="sub-item">Grade 7</a>
          <a href="viewProductHs8.php" class="sub-item">Grade 8</a>
          <a href="viewProductHs9.php" class="sub-item">Grade 9</a>
          <a href="viewProductHs10.php" class="sub-item">Grade 10</a>
        </div>
      </div>
      <div class="item"><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i>Log-Out</a></div>
    </div>
  </div>
  <main>
    <div class="home-page">
      <div class="block">
        <h1>Hi!, I'm PaLibro.</h1>
        <p class="intro">Our online book store offers a vast selection of textbooks and study materials to help students excel in their academic pursuits.</p>
        <a href="viewProduct.php" class="button">Start Here</a>
      </div>
      <div class="block">
        <img src="css/PaLibro.jpg" alt="">
      </div>
    </div>
  </main>
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

</body>

</html>