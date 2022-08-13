<?php
 class MainController extends Controller{
     
    function index(){
       
        $this ->viewInnManager("IndexLayout",[
            'page' => 'Home',
            'menu' => 'menu-open',
            'i' => 1 ,
            'active' => 'active'      
        ]);
    }
    function viewroom(){
        $this ->viewInnManager("IndexLayout",[
            'page' => 'Room',
            'menu' => 'menu-open',
            'i' => 2,
            'active' => 'active' 
        ]);
    }
    function Service(){
        $this ->viewInnManager("IndexLayout",[
            'page' => 'Service',
            'menu' => 'menu-open',
            'i' => 3,
            'active' => 'active' 
        ]);
    }
    function Electric(){
        $this ->viewInnManager("IndexLayout",[
            'page' => 'Electricity',
            'menu' => 'menu-open',
            'i' => 4 ,
            'active' => 'active' 
        ]);
    }
    function Water(){
        $this ->viewInnManager("IndexLayout",[
            'page' => 'ConsumptionWater',
            'menu' => 'menu-open',
            'i' => 5,
            'active' => 'active' 
        ]);
    }
    function Invoice(){
        $this ->viewInnManager("IndexLayout",[
        'page' => 'Invoice',
        'menu' => 'menu-open',
        'i' => 6,
        'active' => 'active' 
        ]);
    }
}
?>
