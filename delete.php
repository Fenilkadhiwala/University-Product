<?php
include "general.php";

$uid = $_GET['uid'];
$dbName = "projects";
$tableName = "faculty";

$myObj1 = new GeneralMethods($dbName);

$myObj1->deleteData($dataArr, $keyArr, $arrValues, $tableName, $uid);

?>