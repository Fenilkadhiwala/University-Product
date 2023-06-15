<?php

include "general.php";

$dataArr = $_POST;
$tableName = "course";
$dbName = "projects";
$location = "addCourse.php";

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


$myObj1 = new GeneralMethods($dbName);


$myObj1->insertData($dataArr, $keyArr, $arrValues, $tableName, $location);















?>