<?php

class GeneralMethods
{
    public $con;
    public $dbName;

    public $lh = "localhost";
    public $un = "root";
    public $ps = "";



    function __construct($dbName)
    {

        $this->dbName = $dbName;
        $this->con = new mysqli($this->lh, $this->un, $this->ps, $this->dbName);

        if (!$this->con) {
            header("location:index.php");
            die(mysqli_error($this->con));
        }
    }


    public function insertData($dataArr, $keyArr, $arrValues, $tableName)
    {
        $columns = implode(",", $keyArr);


        $quotedValues = array_map(function ($value) {
            return "'" . $value . "'";
        }, $arrValues);

        $values = implode(",", $quotedValues);



        $query = "INSERT INTO $tableName($columns) VALUES($values)";

        $result = mysqli_query($this->con, $query);

        if ($result) {
            header("location:index.php?err=succ");
        } else {
            header("location:index.php?err=failed");
        }
    }

    public function updateData()
    {
        
    }
    public function deleteData()
    {

    }




}

?>