<?php
    namespace App\Classes;


    class BaseController {
    public function view($view, $data = []) 
    {
        extract($data);
        require_once "app/Views/".$view.".php";
    }
    }
?>
