<?php
include "general.php";

$uid = $_GET['uid'];
$dbName = "projects";
$tableName = "faculty";
$location = "allFaculty.php";

$myObj1 = new GeneralMethods($dbName);

$myObj1->deleteData($tableName, $uid, $location);

?>