<?php

require("config.php");

function image_upload($img)
{
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
        header("location: viewProductHs10.php?alert=img_upload");
        exit;
    }else{
       return $new_name;
    }
}

function image_remove($img)
{
    if(!unlink(UPLOAD_SRC.$img)){
        header("location: viewProductHs10.php?alert=img_rem_fail");
        exit;
    }
}
if(isset($_POST['addproductHS']))
{
 
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    $imgpath = image_upload($_FILES['image']);

    $query="INSERT INTO cart_itemhs10(title_of_the_bookHS, date_of_publishedHS, author, prices, highschool_level, images) 
    VALUES ('$_POST[title_of_the_bookHS]','$_POST[date_of_publishedHS]','$_POST[author]','$_POST[prices]','$_POST[highschool_level]','$imgpath')";

    if(mysqli_query($con, $query)){
        header("location: viewProductHs10.php?success=added");
    } else {
        header("location: viewProductHs10.php?alert=add_failed");
    }
}

if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM cart_itemhs10 WHERE cartid_hs='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    image_remove($fetch['images']);

    $query="DELETE FROM `cart_itemhs10` WHERE `cartid_hs`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: viewProductHs10.php?success=removed");
    } else {
        header("location: viewProductHs10.php?alert=remove_failed");
    }
}

if(isset($_POST['editproductHS']))
{
    foreach($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($con, $value);
    }
    if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
    {
        $query="SELECT * FROM cart_itemhs10 WHERE cartid_hs='$_POST[editpidHS]'";
        $result=mysqli_query($con,$query);
        $fetch=mysqli_fetch_assoc($result);

        $imgpath=image_upload($_FILES['image']);

        $update="UPDATE `cart_itemhs10` SET `title_of_the_bookHS`='$_POST[title_of_the_bookHS]',`highschool_level`='$_POST[highschool_level]',`date_of_publishedHS`='$_POST[date_of_publishedHS]',
        `author`='$_POST[author]',`prices`='$_POST[prices]',`images`='$imgpath', `stock_status`='$_POST[stock_status]' WHERE cartid_hs='$_POST[editpidHS]'"; 
    } else {
        $update="UPDATE `cart_itemhs10` SET `title_of_the_bookHS`='$_POST[title_of_the_bookHS]',`highschool_level`='$_POST[highschool_level]',`date_of_publishedHS`='$_POST[date_of_publishedHS]',
        `author`='$_POST[author]',`prices`='$_POST[prices]', `stock_status`='$_POST[stock_status]' WHERE cartid_hs='$_POST[editpidHS]'";
    }
    if(mysqli_query($con,$update)){
        header("location: viewProductHs10.php?success=updated");
    } else {
        header("location: viewProductHs10.php?alert=update_failed");
    }
}   
?>