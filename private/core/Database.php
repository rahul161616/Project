<?php

class Database
{

    private function connect()
    {


        $string = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;


        if (!$con = new PDO($string, DBUSER,DBPASS)) {
            die("could not connect to database");
        }
        return $con;
    }
    public function query($query, $data = array(), $data_type = "object") //=array(so that the  arguement can be optional and default value is already given)
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        if ($stm) {
            $check = $stm->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC); //fetches all the data from the database
                }
                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
        return false;
    }
}
