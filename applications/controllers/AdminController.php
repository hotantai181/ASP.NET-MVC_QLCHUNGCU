<?php
 class Admin extends Controller{
     
    function Home(){
       
        $this ->viewInnManager("LayoutAdmin",[
            'page' => 'Home',    
        ]);
    }
    function ListAP(){
       
        $this ->viewInnManager("LayoutAdmin",[
            'page' => 'ListArptments',    
        ]);
    }
}
?>