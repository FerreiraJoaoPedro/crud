<?php

if(isset($_FILES["figura"]["name"])){

    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["figura"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["figura"]["tmp_name"]);
        if($check !== false) {

            $uploadOk = 1;
        } else {

            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {

        $uploadOk = 0;
    }

    if ($_FILES["figura"]["size"] > 500000) {

        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {

    } else {
        if (move_uploaded_file($_FILES["figura"]["tmp_name"], $target_file)) {
            header('Location: ../view/indexUsuarios.php');
        }
        else {
        }
    }

}
else{
    $figura = "usuario-default.jpg";
}

?>