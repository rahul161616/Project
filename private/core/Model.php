<?php
//main model
//whatever functions every model (tables lets say) in common will be here
class Model extends Database
{
    public function __construct()
    {
        if (!property_exists($this, 'table')) {
            $this->table = strtolower(get_class($this));
        }
    }

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
    }

    public function findAll()
    {

        $query = "select * from $this->table";
        return $this->query($query);
    }


    public function insert($data)
    {
        $keys = array_keys($data);
        $columns = implode(',', $keys); //fetches array and places column name by commas  ..., ....,
        $values = implode(',:', $keys); //fetches array and places column name by commas  ..., ....,
        $query = "insert into $this->table ($columns) values (:$values);";

        return $this->query($query, $data);
    }



    // public function update($data, $id)
    // {
    //     $column = addslashes($column);
    //     $query = "select * from $this->table where $column = :value";
    //     return $this->query($query, [
    //         'value' => $value
    //     ]);
    // }




    // public function delete($id)
    // {
    //     $column = addslashes($column);
    //     $query = "select * from $this->table where $column = :value";
    //     return $this->query($query, [
    //         'value' => $value
    //     ]);
    // }
}
