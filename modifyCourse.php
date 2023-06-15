<?php
include "general.php";

$dataArr = $_POST;
$tableName = "course";
$dbName = "projects";
$location = "addCourse.php";

$keyToDelete = 'submit';
$keyToDelete1 = 'uuid';

$uid = $_POST['uuid'];

if (isset($dataArr[$keyToDelete])) {
    unset($dataArr[$keyToDelete]);
}

if (isset($dataArr[$keyToDelete1])) {
    unset($dataArr[$keyToDelete1]);
}

$keyArr = array_keys($dataArr);

$arrValues = array_values($dataArr);




// echo "<pre>";

// print_r($dataArr);
// print_r($keyArr);
// print_r($arrValues);

$myObj1 = new GeneralMethods($dbName);

$myObj1->updateData($dataArr, $keyArr, $arrValues, $tableName, $uid, $location);

?>