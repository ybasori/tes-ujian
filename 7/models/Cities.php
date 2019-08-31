<?php
namespace models;



use systems\Db;

class Cities
{
    public function __construct(){
        $this->db = new Db;
        $this->table_cities = "cities";
    }
    public function get(){
        return $this->db->query("SELECT * FROM ".$this->table_cities);
    }
    public function save($data){
        $input ="";
        $value ="";
        $i=0;
        foreach($data as $key => $dt){
            $i++;
            
            $input = $input . $key;
            $value = $value . "'" . $dt . "'"; 
            if(count($data)!=($i)){
                $input = $input . ",";
                $value = $value . ",";
            }
        }
        return $this->db->query("INSERT INTO ".$this->table_cities." (" . $input . ") VALUES (".$value.")");
    }
    public function delete($data){
        $value ="";
        $i=0;
        foreach($data as $key => $dt){
            $i++;
            
            $value = $value . $key . "='" . $dt . "'"; 
            if(count($data)!=($i)){
                $value = $value . " AND ";
            }
        }
        return $this->db->query("DELETE FROM ".$this->table_cities." WHERE ".$value);

    }
}


?>