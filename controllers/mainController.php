<?php 


class Main implements Controller{
    public static function Display(){
       
       require_once MODELS."mainModel.php";
 
        
        $array = ["{css}"=>HOST."views/css",
                  "{img}"=>HOST."views/img",
                  "{js}"=>HOST."views/js"];
        
        $Template= new Template;

        
        echo $Template->GetPage('home.html')->ReplacePage()->ReplaceData($array)->Render();
        

        
    }
}


?>