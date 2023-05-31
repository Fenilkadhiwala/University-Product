<?php
include "general.php";

$dataArr = $_POST;
$tableName = "faculty";
$dbName = "projects";

$keyToDelete = 'submit';

if (isset($dataArr[$keyToDelete])) {
    unset($dataArr[$keyToDelete]);


}






$keyArr = array_keys($dataArr);

$arrValues = array_values($dataArr);

echo "<pre>";
print_r($_FILES['image']);

$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$temp_name = $_FILES['image']['temp_name'];
$error = $_FILES['image']['error'];

if ($error === 0) {
    if ($img_size > 125000) {
        $err = "Image Size Is Too Large!!";
        header("location:index.php?$err");
    } else {
        $ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex = strtolower($ex);

        $allEx = array("jpg", "jpeg", "png");

        if (in_array($img_ex, $allEx)) {

            $img_new_name = uniqid("IMG-", true) . '.' . $img_ex;
            $img_upload_path = 'upload/' . $img_new_name;
            move_uploaded_file($temp_name, $img_upload_path);
        } else {
            $err = "This Extension Is Not Allowed!!";
            header("location:index.php?$err");
        }


    }
} else {
    $err = "Unknown Error Has Been Occurred!!";
    header("location:index.php?$err");
}

// echo "$img_name";

// $myObj1 = new GeneralMethods($dbName);


// $myObj1->insertData($dataArr, $keyArr, $arrValues, $tableName);















?>