<?php

include "general.php";

$dataArr = $_POST;
$tableName = "student";
$dbName = "projects";

$keyToDelete = 'submit';

if (isset($dataArr[$keyToDelete])) {
    unset($dataArr[$keyToDelete]);


}





$keyArr = array_keys($dataArr);

$arrValues = array_values($dataArr);

// echo "<pre>";
// print_r($keyArr);


// echo "<pre>";
// print_r($arrValues);

// echo "<pre>";
// print_r($_FILES['simg']);

$img_name = $_FILES['simg']['name'];
$img_size = $_FILES['simg']['size'];
$tmp_name = $_FILES['simg']['tmp_name'];
$error = $_FILES['simg']['error'];

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




$keyArr["9"] = "simg";
$arrValues["9"] = $img_new_name;


$img_name = $_FILES['saadhar']['name'];
$img_size = $_FILES['saadhar']['size'];
$tmp_name = $_FILES['saadhar']['tmp_name'];
$error = $_FILES['saadhar']['error'];

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




$keyArr["10"] = "saadhar";
$arrValues["10"] = $img_new_name;


$img_name = $_FILES['smarksheet']['name'];
$img_size = $_FILES['smarksheet']['size'];
$tmp_name = $_FILES['smarksheet']['tmp_name'];
$error = $_FILES['smarksheet']['error'];

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




$keyArr["11"] = "smarksheet";
$arrValues["11"] = $img_new_name;

// echo "<pre>";
// print_r($keyArr);


// echo "<pre>";
// print_r($arrValues);


$myObj1 = new GeneralMethods($dbName);


$myObj1->insertData($dataArr, $keyArr, $arrValues, $tableName);















?>