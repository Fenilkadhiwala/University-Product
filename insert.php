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


// print_r($dataArr);
// print_r($arrValues);

$myObj1 = new GeneralMethods($dbName);

$myObj1->insertData($dataArr, $keyArr, $arrValues, $tableName);

?>