<?php
namespace models;



use systems\Db;

class Biodata
{
    public function __construct(){
        $this->db = new Db;
        $this->table_biodata = "biodata";
        $this->table_cities = "cities";
    }
    public function get(){
        return $this->db->query("SELECT b.id, full_name, place_of_birth_id, c.name as place_of_birth, date_of_birth, phone_number, last_education, religion, hobi, address FROM ".$this->table_biodata." b JOIN ".$this->table_cities." c ON b.place_of_birth_id = c.id");
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
        return $this->db->query("INSERT INTO ".$this->table_biodata." (" . $input . ") VALUES (".$value.")");
    }
    public function update($data, $id){
        $value ="";
        $i=0;
        foreach($data as $key => $dt){
            $i++;
            
            $value = $value . $key . "='" . $dt . "'"; 
            if(count($data)!=($i)){
                $value = $value . " , ";
            }
        }
        return $this->db->query("UPDATE ".$this->table_biodata." SET ".$value." WHERE id='".$id."'");
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
        return $this->db->query("DELETE FROM ".$this->table_biodata." WHERE ".$value);

    }
}


?>