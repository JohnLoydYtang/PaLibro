<?php
session_start();
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VIEW ORDERS</title>
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
        VIEW ORDERS (HIGH SCHOOL)
      </h2>
    </div>
  </div>
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
    if ($_GET['alert'] == 'update_failed') {
      echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Failed to update Order!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
  } else if (isset($_GET['success'])) {
    if ($_GET['success'] == 'updated') {
      echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Order Updated</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
    }
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
  <div class="container mt-4 p-0">
    <form class="form-inline my-2 my-lg-0" method="post" action="">
      <input class="form-control mr-sm-2" type="text" name="search_ref_no" placeholder="Search by Reference No." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color:green;color:white;" name="search">Search</button>
    </form>
    <table class="table table-hover text-center">
      <thead class="bg-dark text-light">
        <tr>
          <th width="5%" scope="col" class="rounded-start">Reference No.</th>
          <th width="10%" scope="col">FULLNAME</th>
          <th width="10%" scope="col">TITLE OF THE BOOK</th>
          <th width="10%" scope="col">HIGH SCHOOL LEVEL</th>
          <th width="10%" scope="col">TOTAL</th>
          <th width="10%" scope="col">STATUS</th>
          <th width="10%" scope="col" class="rounded-end"> </th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php
        if (isset($_POST['search'])) {
          $search_ref_no = $_POST['search_ref_no'];
          $query = "SELECT * FROM checkout_itemhs WHERE Reference_No LIKE '%$search_ref_no%'";
        } else {
          $query = "SELECT * FROM checkout_itemhs";
        }
        $result = mysqli_query($con, $query);

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
                            <a href="?edit=$fetch[Reference_No]" class="btn btn-success me-2 ">View Details</a>
                            <button onclick="confirm_rem($fetch[Reference_No])" class="btn btn-danger me-2"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>
                    product;
        }
        ?>

      </tbody>
    </table>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editorder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="ordercrudHS.php" method="post" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="color:black;">VIEW ORDER DETAILS</h5>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <span class="input-group-text">REFERENCE NO#</span>
              <input type="number" class="form-control" placeholder="Reference_No" name="Reference_No" id="editReference_No" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">FULLNAME</span>
              <input type="text" class="form-control" name="fullname" id="editfullname" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">TITLE OF THE BOOK</span>
              <input type="text" class="form-control" name="title_of_the_bookHS" id="edittitle_of_the_bookHS" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">DATE OF PURCHASE</span>
              <input type="date" class="form-control" placeholder="" name="dates_of_purchase" id="editdates_of_purchase" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">TOTAL:</span>
              <input type="number" class="form-control" placeholder="TOTAL #:" name="total" id="edittotal" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">GRADE LEVEL</span>
              <input type="text" class="form-control" placeholder=" " name="highschool_level" id="edithighschool_level" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">ORDER STATUS</span>
              <select name="order_status" class="form-control" id="editorder_status" required>
                <option value="Pending">Pending</option>
                <option value="Claimed">Claimed</option>
              </select>
            </div>
            <input type="hidden" name="editpid" id="editpid">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="editorder">Edit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php
  if (isset($_GET['edit']) && $_GET['edit'] > 0) {
    $query = "SELECT * FROM checkout_itemhs WHERE Reference_No='$_GET[edit]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    echo "
      <script>
      var editorder = new bootstrap.Modal(document.getElementById('editorder'), {
        keyboard: true
      });
      document.querySelector('#editReference_No').value=`$fetch[Reference_No]`;
      document.querySelector('#editfullname').value=`$fetch[fullname]`;
      document.querySelector('#edittitle_of_the_bookHS').value=`$fetch[title_of_the_bookHS]`;
      document.querySelector('#editdates_of_purchase').value=`$fetch[dates_of_purchase]`;
      document.querySelector('#edithighschool_level').value=`$fetch[highschool_level]`; 
      document.querySelector('#edittotal').value=`$fetch[total]`;
      document.querySelector('#editorder_status').value=`$fetch[order_status]`;
      document.querySelector('#editpid').value=`$_GET[edit]`;
      editorder.show();
      </script>
    ";
  }
  ?>
  <script>
    function confirm_rem(cart_id) {
      if (confirm("Are you sure?")) {
        window.location.href = "ordercrudHS.php?rem=" + cart_id;
      }
    }
  </script>
</body>

</html>