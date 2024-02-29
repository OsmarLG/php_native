<?php
class Model {
    private $Model;
    private $db;
    private $data;

    public function __construct()
    {
        $this->Model = array();
        $this->db = new PDO('mysql:host=localhost;dbname=crud_prueba', "root", "");
    }
    
    public function insert($table, $data){
        $query = "insert into ".$table." values(null,".$data.");";
        $result = $this->db->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll($table){
        $query = "select * from ".$table.";";
        $result = $this->db->query($query);

        while($rows = $result->FETCHALL(PDO::FETCH_ASSOC)){
            $this->data[] = $rows;
        }

        return $this->data;
    }

    public function show($table, $condition){
        $query = "select * from ".$table." where ".$condition.";";
        $result = $this->db->query($query);

        while($rows = $result->FETCHALL(PDO::FETCH_ASSOC)){
            $this->data[] = $rows;
        }

        return $this->data;
    }

    public function update($table, $data, $condition){
        $query = "update ".$table. " set " . $data ." where ".$condition.";";
        $result = $this->db->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $condition){
        $query = "delete from ".$table." where ".$condition.";";
        $result = $this->db->query($query);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }}