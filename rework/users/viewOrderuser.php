<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
  header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/sidebarw/sidemenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-image: url('https://wallpapercave.com/wp/wp4766529.jpg');
    }
  </style>

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
      <h1>PaLibro</h1>
      <div class="main_content" style="text-align: center;">
        <div class="main_content" style="text-align: center;">
          <a href="user_profile.php" style="text-decoration:none;">
            <div class="header" style="color:white;">Welcome <?php echo $_SESSION['user_name']; ?></div>
          </a>
          <br>
        </div>
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
  <?php
  if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'remove_failed') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Failed to remove Order!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  } else if (isset($_GET['success'])) {

    if ($_GET['success'] == 'removed') {
      echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Order Removed</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  }
  ?>
  <div class="container bg-dark text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between px-3">
      <h2>
        VIEW MY ORDERS
      </h2>
    </div>
  </div>
  <div class="container mt-4 p-0">
    <table class="table table-hover text-center">
      <thead class="bg-dark text-light">
        <tr>
          <th width="5%" scope="col" class="rounded-start">Reference No.</th>
          <th width="10%" scope="col">FULLNAME</th>
          <th width="10%" scope="col">TITLE OF THE BOOK</th>
          <th width="10%" scope="col">GRADE LEVEL</th>
          <th width="10%" scope="col">TOTAL</th>
          <th width="10%" scope="col">STATUS</th>
          <th width="10%" scope="col" class="rounded-end"></th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php

        // $query = "SELECT * FROM checkout_item";
        $user_name = $_SESSION['user_name'];
        $query = "SELECT * FROM checkout_item WHERE fullname = '$user_name'";
        $result = mysqli_query($con, $query);
        $fetch_src = FETCH_SRC;

        while ($fetch = mysqli_fetch_assoc($result)) {
          echo <<<product
                    <tr class="align-middle">
                        <th scope="row">$fetch[Reference_No]</th>
                        <td>$fetch[fullname]</td>
                        <td>$fetch[title_of_the_book]</td>
                        <td>$fetch[grade_level]</td>
                        <td>$fetch[total]</td> 
                        <td>$fetch[order_status]</td>
                        <td>         
                        <button onclick="confirm_rem($fetch[Reference_No])" class="btn btn-danger me-2">Cancel Order</button>    
                        </td>  
                    </tr>
                    product;
        }
        ?>
        <?php

        // $query = "SELECT * FROM checkout_itemhs";
        $user_name = $_SESSION['user_name'];
        $query = "SELECT * FROM checkout_itemhs WHERE fullname = '$user_name'";
        $result = mysqli_query($con, $query);
        $fetch_src = FETCH_SRC;

        while ($fetch = mysqli_fetch_assoc($result)) {
          echo <<<product
                    <tr class="align-middle">
                        <th scope="row">$fetch[Reference_No]</th>
                        <td>$fetch[fullname]</td>
                        <td>$fetch[title_of_the_bookHS]</td>
                        <td>$fetch[highschool_level]</td>
                        <td>$fetch[total]</td> 
                        <td>$fetch[order_status]</td>
                        <td>         
                        <button onclick="confirm_rem($fetch[Reference_No])" class="btn btn-danger me-2">Cancel Order</button>    
                        </td>  
                    </tr>
                    product;
        }
        ?>
        <script>
          function confirm_rem(cart_id) {
            if (confirm("Are you sure?")) {
              window.location.href = "viewOrderuserCrud.php?rem=" + cart_id;
            }
          }
        </script>
      </tbody>
    </table>
  </div>

</body>

</html>