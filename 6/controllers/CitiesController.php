<?php
namespace controllers;

use models\Cities;

class CitiesController
{
    public function __construct(){
        $this->cities=new Cities;
    }
    public function index($request){
        $cities = $this->cities->get();
        include_once("views/templates/template_header.php");
        include_once("views/pages/biodata/index.php");
        include_once("views/templates/template_footer.php");
    }
    public function store($request){
        if(!empty($_POST['name'])){
            $this->cities->save([
                "name"=>$_POST['name']
            ]);
        }
        header("location: /cities");
    }

    public function delete($request){
        if(!empty($_POST['id'])){
            $this->cities->delete([
                "id"=>$_POST['id']
            ]);
        }
        header("location: /cities");
    }
}

