<?php

require("userprofileconfig.php");
function image_upload($img)
{
    $tmp_loc = $img['tmp_name'];
    $new_name = random_int(11111,99999).$img['name'];

    $new_loc = UPLOAD_SRC.$new_name;

    if(!move_uploaded_file($tmp_loc,$new_loc)){
        header("location: user_profileHSHS.php?alert=img_upload");
        exit;
    }else{
       return $new_name;
    }
}
function image_remove($img)
{
    if(!unlink(UPLOAD_SRC.$img)){
        header("location: user_profileHS.php?alert=img_rem_fail");
        exit;
    }
}
if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM user_form WHERE id='$_GET[rem]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    // image_remove($fetch['images']);

    $query="DELETE FROM `user_form` WHERE `id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: usermanage.php?success=removed");
    } else {
        header("location: usermanage.php?alert=remove_failed");
    }
}

if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
{
    $query="SELECT * FROM user_form WHERE id='$_POST[editpid]'";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);

    // Remove the old image from the server
    image_remove($fetch['images']);

    // Upload the new image and get its filename
    $new_image = image_upload($_FILES['image']);

    // Update the user_form table with the new image filename
    $update="UPDATE `user_form` SET `fullname`='$_POST[fullname]',`email`='$_POST[email]',`passwords`='$_POST[passwords]',
    `user_type`='$_POST[user_type]',`phonenumber`='$_POST[phonenumber]', `images`='$new_image' WHERE id='$_POST[editpid]'";
}

?>