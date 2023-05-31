<?php
include "general.php";

$dataArr = $_POST;
$tableName = "faculty";
$dbName = "projects";

$keyToDelete = 'submit';
$uid = $_POST['uid'];

if (isset($dataArr[$keyToDelete])) {
    unset($dataArr[$keyToDelete]);
}

$keyArr = array_keys($dataArr);

$arrValues = array_values($dataArr);





// print_r($dataArr);
// print_r($arrValues);

$myObj1 = new GeneralMethods($dbName);

$myObj1->updateData($dataArr, $keyArr, $arrValues, $tableName, $uid);

?>