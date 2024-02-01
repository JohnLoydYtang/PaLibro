<?php

require("config.php");

if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM checkout_item WHERE Reference_No='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    // image_remove($fetch['images']);

    $query="DELETE FROM `checkout_item` WHERE `Reference_No`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: viewOrders.php?success=removed");
    } else {
        header("location: viewOrders.php?alert=remove_failed");
    }
}

if (isset($_POST['editorder'])) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }

    $query = "SELECT * FROM checkout_item WHERE Reference_No='$_POST[editpid]'";
    $result = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($result);

    $update = "UPDATE `checkout_item` SET `order_status`='$_POST[order_status]' WHERE Reference_No='$_POST[editpid]'";

    if (mysqli_query($con, $update)) {
        header("location: viewOrders.php?success=updated");
    } else {
        header("location: viewOrders.php?alert=update_failed");
    }
}
?>