<?php

class Cart implements Controller{
    public static function Display(){
        
       require_once MODELS."cartModel.php";
 
        
        $array = ["{css}"=>HOST."views/css",
                  "{img}"=>HOST."views/img",
                  "{js}"=>HOST."views/js"];
        
        $Template= new Template;

        
        echo $Template->GetPage('cart.html')->ReplacePage()->ReplaceData($array)->Render();
    }
    
    
    
}

