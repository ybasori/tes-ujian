<?php
namespace controllers;



class HomeController
{
    public function index($request){
        include_once("views/templates/template_header.php");
        include_once("views/pages/home/index.php");
        include_once("views/templates/template_footer.php");
    }
}
