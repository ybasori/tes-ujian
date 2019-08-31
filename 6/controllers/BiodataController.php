<?php
namespace controllers;

use models\Biodata;
use models\Cities;

class BiodataController
{
    public function __construct(){
        $this->biodata=new Biodata;
        $this->cities=new Cities;
    }
    public function index($request){
        $biodatas = $this->biodata->get();
        $cities = $this->cities->get();
        $cities1 = $this->cities->get();
        include_once("views/templates/template_header.php");
        include_once("views/pages/biodata/index.php");
        include_once("views/templates/template_footer.php");
    }
    public function create(){
        if(count($_POST)!=0){
            $post=[];
            foreach($_POST as $key => $value){
                $string = str_replace('\\', '\\\\', $value);
                $string = str_replace('\'', '\\\'', $string);
                $string = str_replace('"', '\\"', $string);
                $post[$key]=$string;
            }
            
            $this->biodata->save($post);
        }
        header("location: /biodata");
        

    }
    public function update($request){
        if(count($_POST)!=0){
            $post=[];
            foreach($_POST as $key => $value){
                if($key!="id"){
                    $string = str_replace('\\', '\\\\', $value);
                    $string = str_replace('\'', '\\\'', $string);
                    $string = str_replace('"', '\\"', $string);
                    $post[$key]=$string;
                }
            }
            
            $this->biodata->update($post, $_POST['id']);
        }
        header("location: /biodata");
    }

    public function delete($request){
        if(!empty($_POST['id'])){
            $this->biodata->delete([
                "id"=>$_POST['id']
            ]);
        }
        header("location: /biodata");
    }
}
