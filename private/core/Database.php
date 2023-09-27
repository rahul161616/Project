<?php

class Database
{

    private function connect()
    {
        $string = "mysql:host=localhost;dbname = projectkg";

        if (!$con = new PDO($string, "root", "")) {
            die("could not connect to database");
        }
        return $con;
    }
    public function run($query, $data = array(), $data_type = "object") //=array(so that the  arguement can be optional and default value is already given)
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
    public function query()
    {
    }
}
