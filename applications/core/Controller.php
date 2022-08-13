<?php 
    class Controller{
        public function model($model){
            require_once "./applications/models/" .$model. ".php";
            return new $model;
        }
        public function viewInnManager($view,$data=[]){
            require_once "./applications/views/" .$view. ".php";
            
        }
    }      

?>