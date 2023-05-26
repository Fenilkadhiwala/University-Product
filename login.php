<?php
include "general.php";

$dataArr = $_POST;
$tableName = "userregister";
$dbName = "projects";

$keyToDelete = 'submit';

if (isset($dataArr[$keyToDelete])) {
    unset($dataArr[$keyToDelete]);
}

$keyArr = array_keys($dataArr);

$arrValues = array_values($dataArr);




$myObj1 = new GeneralMethods($dbName);

$myObj1->loginVerification($dataArr, $keyArr, $arrValues, $tableName);

?>