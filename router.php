<?php

if(isset($_GET["controller"]) and !empty($_GET["controller"])){
    
    
    
    if (file_exists(CONTROLLERS.$_GET['controller']."Controller.php")){
        
        require_once CONTROLLERS.$_GET['controller']."Controller.php";
        
        $class = $_GET['controller'];
        
        if(isset($_GET['method']) and !empty($_GET['method'])){
            
                $method = $_GET['method'];
         
                if(class_exists($class) and method_exists($class, $method)){
                 $class::$method();    
                }
                else {
                    header("location:".HOST.'404.html');
                }
        } else {
                $class::display();
        }
        
        
        
        
    }
    else {
        header("Location:".HOST."404.html");
    }
    
    
    
}
else {
    if(file_exists(CONTROLLERS.'mainController.php')){
        
       require_once CONTROLLERS.'mainController.php';
        
        if(class_exists('Main') and method_exists('Main','display')){
            Main::display();
        }
        else{
            echo "Error class or method";
        }
    }
    else {
        echo "Controller is not found";
    }
    
}

?>