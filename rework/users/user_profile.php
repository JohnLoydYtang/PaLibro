<?php
@include 'userprofileconfig.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

// Fetch user data
$user_name = $_SESSION['user_name'];
$query = "SELECT * FROM user_form WHERE fullname = '$user_name'";
$result = mysqli_query($con, $query);
$user_data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PROFILE</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
    <style>
        .user-image {
            text-align: center;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .user-image img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
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
                <a href="user_profile.php" style="text-decoration:none;">
                    <div class="header" style="color:white;">Welcome <?php echo $_SESSION['user_name']; ?></div>
                </a>
                <br>
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

        if ($_GET['alert'] == 'update_failed') {
            echo <<<alert
      <div class="container alert alert-danger alert-dismissible fade show text-center" role="alert">
        <strong>Failed to update User!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
        }
    } else if (isset($_GET['success'])) {
        if ($_GET['success'] == 'updated') {
            echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>User Updated</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
        }
        if ($_GET['success'] == 'removed') {
            echo <<<alert
      <div class="container alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>User Removed</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      alert;
        }
    }
    ?>
    <!-- code start -->
    <div class="container mt-5">
        <div class="row align-items-start">
            <div class="col-md-4">
                <div class="user-image" style="height: 23rem; position: relative; z-index: -1;">
                    <img src="<?php echo FETCH_SRC . $user_data['images']; ?>" alt="User Image">
                </div>
            </div>
            <div class="col-md-6 offset-md-1" style="background-color:white; height: 23rem;">
                <h3 style="color:black;">User Profile</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <td><?php echo $user_data['id']; ?></td>
                    </tr>
                    <tr>
                        <th>Fullname</th>
                        <td><?php echo $user_data['fullname']; ?></td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td><?php echo $user_data['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>Hidden for security reasons</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><?php echo $user_data['phonenumber']; ?></td>
                    </tr>
                    <tr>
                        <th>User Type</th>
                        <td><?php echo $user_data['user_type']; ?></td>
                    </tr>
                </table>
                <a href="?edit=<?php echo $user_data['id']; ?>" class="btn btn-warning me-4 float-right"><i class="bi bi-pencil-square"></i> Edit User</a>
            </div>
        </div>
    </div>

    <!-- Edit -->
    <div class="modal fade" id="edituser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="profilecrud.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="color:black;">VIEW USER DETAILS</h5>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">FULLNAME</span>
                            <input type="text" class="form-control" placeholder="FULL NAME" name="fullname" id="editfullname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">EMAIL ADDRESS</span>
                            <input type="email" class="form-control" name="email" id="editemail" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">PASSWORD</span>
                            <input type="password" class="form-control" placeholder="" name="passwords" id="editpasswords" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">PHONE NUMBER</span>
                            <input type="number" class="form-control" placeholder="Phone #:" name="phonenumber" id="editphone" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">USER TYPE</span>
                            <select name="user_type" class="form-control" id="editusertype" required>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        <img src="" id="editimg" width="100%" class="mb-3"><br>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Image</span>
                            <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg">
                        </div>
                        <input type="hidden" name="editpid" id="editpid">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="edituser">Edit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['edit']) && $_GET['edit'] > 0) {
        $query = "SELECT * FROM user_form WHERE id='$_GET[edit]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        echo "
      <script>
      var edituser = new bootstrap.Modal(document.getElementById('edituser'), {
        keyboard: true
      });
      document.querySelector('#editfullname').value=`$fetch[fullname]`;
      document.querySelector('#editemail').value=`$fetch[email]`;
      document.querySelector('#editpasswords').value=`$fetch[passwords]`;
      document.querySelector('#editphone').value=`$fetch[phonenumber]`; 
      document.querySelector('#editusertype').value=`$fetch[user_type]`;
      document.querySelector('#editimg').src = '" . FETCH_SRC . "{$fetch['images']}';
      document.querySelector('#editpid').value=`$_GET[edit]`;
      edituser.show();
      </script>
    ";
    }
    ?>

    <script>
        function confirm_rem(cart_id) {
            if (confirm("Are you sure?")) {
                window.location.href = "profilecrud.php?rem=" + cart_id;
            }
        }
    </script>
</body>

</html>