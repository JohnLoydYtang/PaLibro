<?php
session_start();
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Shopping Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <title>Admin Page</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/sidebarw/sidemenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-image: url('https://wallpapercave.com/wp/wp4766529.jpg');
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
      <h1>PaLibro</h1>
      <div class="main_content" style="text-align: center;">
        <a href="user_profileHS.php" style="text-decoration:none;">
          <div class="header" style="color:white;">Welcome <?php echo $_SESSION['admin_name']; ?></div>
        </a> <br>
      </div>
    </header>
    <!-- #Menu-->
    <div class="menu">
      <div class="item"><a href="admin_page.php"><i class="fas fa-desktop"></i>Dashboard</a></div>
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
  <!-- This is where the code starts-->
  <div class="container bg-dark text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between px-3">
      <h2>
        GRADE 10
      </h2>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproductHS"><i class="bi bi-plus-square"></i>
        Add Product
      </button>
    </div>
  </div>
  <?php
  if (isset($_GET['alert'])) {
    if ($_GET['alert'] == 'img_upload') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Image Upload Failed!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['alert'] == 'img_rem_fail') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Image Removal Failed!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['alert'] == 'add_failed') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Cannot add Product!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['alert'] == 'remove_failed') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Failed to remove Product!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['alert'] == 'update_failed') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Failed to update Product!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  } else if (isset($_GET['success'])) {
    if ($_GET['success'] == 'updated') {
      echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Product Updated</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['success'] == 'added') {
      echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Product Added</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
    if ($_GET['success'] == 'removed') {
      echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Product Removed</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  }
  ?>
  <div class="container mt-4 p-0">
    <table class="table table-hover text-center">
      <thead class="bg-dark text-light">
        <tr>
          <th width="5%" scope="col" class="rounded-start">ID</th>
          <th width="10%" scope="col">TITLE</th>
          <th width="10%" scope="col">DATE</th>
          <th width="10%" scope="col">AUTHOR</th>
          <th width="10%" scope="col">PRICE</th>
          <th width="10%" scope="col">HIGHSCHOOL LEVEL</th>
          <th width="10%" scope="col">IMAGE</th>
          <th width="10%" scope="col">STATUS</th>
          <th width="10%" scope="col" class="rounded-end">ACTION</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php

        $query = "SELECT * FROM cart_itemhs10";
        $result = mysqli_query($con, $query);
        $fetch_src = FETCH_SRC;

        while ($fetch = mysqli_fetch_assoc($result)) {
          echo <<<product
                    <tr class="align-middle">
                        <th scope="row">$fetch[cartid_hs]</th>
                        <td>$fetch[title_of_the_bookHS]</td>
                        <td>$fetch[date_of_publishedHS]</td>
                        <td>$fetch[author]</td>
                        <td>₱$fetch[prices]</td>
                        <td>$fetch[highschool_level]</td>
                        <td><img  src= "$fetch_src$fetch[images]" width="150px"></td>
                        <td>$fetch[stock_status]</td>
                        <td>
                            <a href="?editHS=$fetch[cartid_hs]" class="btn btn-warning me-2 "><i class="bi bi-pencil-square"></i></a>
                            <button onclick="confirm_rem($fetch[cartid_hs])" class="btn btn-danger me-2"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    product;
        }
        ?>

      </tbody>
    </table>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="addproductHS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="crudHs10.php" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color:black;">Add Product</h5>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text">Title</span>
              <input type="text" class="form-control" placeholder="Title of the book" name="title_of_the_bookHS" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Date</span>
              <input type="date" class="form-control" name="date_of_publishedHS" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Author</span>
              <input type="text" class="form-control" placeholder="Author" name="author" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Price</span>
              <input type="number" class="form-control" placeholder="Price" name="prices" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">HIGH SCHOOL</span>
              <select name="highschool_level" class="form-control">
                <option value="grade10">Grade 10</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Image</span>
              <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="addproductHS">Add</button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <!-- Edit -->
  <div class="modal fade" id="editproductHS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="crudHs10.php" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Product</h5>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Stock Status</span>
            <select name="stock_status" class="form-control" id="editstockstatus" required>
              <option value="in-stock">In-Stock</option>
              <option value="out-of-stock">Out of Stock</option>
            </select>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text">Title</span>
              <input type="text" class="form-control" placeholder="Title of the book" name="title_of_the_bookHS" id="edittitle" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Date</span>
              <input type="date" class="form-control" name="date_of_publishedHS" id="editdate" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Author</span>
              <input type="text" class="form-control" placeholder="Author" name="author" id="editauthor" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Price</span>
              <input type="number" class="form-control" placeholder="Price" name="prices" id="editprice" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">HIGH SCHOOL</span>
              <select name="highschool_level" class="form-control" id="editgrade" required>
                <option value="grade10">Grade 10</option>
              </select>
            </div>
            <img src="" id="editimg" width="100%" class="mb-3"><br>
            <div class="input-group mb-3">
              <span class="input-group-text">Image</span>
              <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg">
            </div>
            <input type="hidden" name="editpidHS" id="editpidHS">
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success" name="editproductHS">Edit</button>
          </div>
        </div>
      </form>

    </div>
  </div>

  <?php
  if (isset($_GET['editHS']) && $_GET['editHS'] > 0) {
    $query = "SELECT * FROM cart_itemhs10 WHERE cartid_hs='$_GET[editHS]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    echo "
      <script>
      var editproductHS = new bootstrap.Modal(document.getElementById('editproductHS'), {
        keyboard: false
      });
      document.querySelector('#edittitle').value=`$fetch[title_of_the_bookHS]`;
      document.querySelector('#editdate').value=`$fetch[date_of_publishedHS]`;
      document.querySelector('#editauthor').value=`$fetch[author]`;
      document.querySelector('#editprice').value=`$fetch[prices]`; 
      document.querySelector('#editgrade').value=`$fetch[highschool_level]`;
      document.querySelector('#editimg').src=`$fetch_src$fetch[images]`;
      document.querySelector('#editpidHS').value=`$_GET[editHS]`;
      document.querySelector('#editstockstatus').value=`$fetch[stock_status]`;
      editproductHS.show();
      </script>
    ";
  }
  ?>
  <script>
    function confirm_rem(cartid_hs) {
      if (confirm("Are you sure?")) {
        window.location.href = "crudHs10.php?rem=" + cartid_hs;
      }
    }
  </script>
</body>

</html>