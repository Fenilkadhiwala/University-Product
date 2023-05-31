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

// echo "<pre>";
// print_r($_FILES['image']);

$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

if ($error === 0) {
    if ($img_size > 1250000) {
        $err = "Image Size Is Too Large!!";
        header("location:index.php?$err");
    } else {
        $ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex = strtolower($ex);

        $allEx = array("jpg", "jpeg", "png");

        if (in_array($img_ex, $allEx)) {

            $img_new_name = uniqid("IMG-", true) . '.' . $img_ex;
            $img_upload_path = 'uploads/' . $img_new_name;
            move_uploaded_file($tmp_name, $img_upload_path);
        } else {
            $err = "This Extension Is Not Allowed!!";
            header("location:index.php?$err");
        }


    }
} else {
    $err = "Unknown Error Has Been Occurred!!";
    header("location:index.php?$err");
}




$keyArr["6"] = "img";
$arrValues["6"] = $img_new_name;

// echo "<pre>";
// print_r($keyArr);


// echo "<pre>";
// print_r($arrValues);

// echo "$img_name";

$myObj1 = new GeneralMethods($dbName);


$myObj1->insertData($dataArr, $keyArr, $arrValues, $tableName);















?>