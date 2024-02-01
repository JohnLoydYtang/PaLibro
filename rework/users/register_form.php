<?php
@include 'config.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $pass = md5($_POST['passwords']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' AND fullname = '$name' AND phonenumber = '$phonenumber'";
    
    $result = mysqli_query($conn, $select);
    mysqli_store_result($conn); // Added this line
    $numrows = mysqli_num_rows($result); // Changed this line

    if ($numrows > 0) {
        $error[] = 'user already existed';
    } else {
        if ($pass != $cpass) {
            $error[] = 'password not match';
        } else {
            $insert = "INSERT INTO user_form(fullname, email, phonenumber, passwords, user_type) VALUES ('$name','$email','$phonenumber','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location: login_form.php');
        }
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body{
        background-image: url('https://wallpapercave.com/wp/wp4766529.jpg');
    }
        </style>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
        <h3>Register Now</h3>   
        <?php 
        if(isset($error)){
            foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?> 
        <input type="text" name="fullname" required placeholder="enter your fullname">
        <input type="email" name="email" required placeholder="enter your email">
        <input type="phone" name="phonenumber" required placeholder="enter your phonenumber">
        <input type="password" name="passwords" required placeholder="enter your password">
        <input type="password" name="cpassword" required placeholder="confirm your password">    
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="Register" class="form-btn">
        <p>Already have an account? <a href="login_form.php">Login now</a></p>
    </form>
    </div>
</body>
</html>