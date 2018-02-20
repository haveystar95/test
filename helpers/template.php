<?php
class Template {
    public $html;
    
    public $somepage;
    
    public function __construct(){
        
        $this->html=file_get_contents(VIEWS.'main.html');
    }
    
    
    
    public function GetPage(string $page){
       $this->somepage= file_get_contents(VIEWS.$page);
        return $this;
    }
    
    
    public function ReplacePage(){
        
     $this->html=str_replace('{page}',$this->somepage,$this->html); 
        
        return $this;
    }
    
    
    public function ReplaceData(array $array){

        
        foreach($array as $key=>$elem){
           $this->html=  str_replace($key,$elem,$this->html); 
        }
      
        return $this;
    }
    public function Render(){
        return $this->html;
    }
    
    
}
?>