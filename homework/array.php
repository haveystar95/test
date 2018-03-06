<?php
class Home{
    
    public $array1 =['1','5','3','4'];
    public $array2 =['4','5','3','7'];
    public $array3=[];
    
    
    
    public function Foo(){
        
        foreach ($this->array1 as $elem){
            

            
            foreach ($this->array2 as $elem2){
                
                if ($elem==$elem2){
                    
                    $this->array3[]=$elem2;
                }
            }
        }
        
        return $this->array3;
    }
}

 
$home= new Home;

$array=$home-> Foo();

print_r($array);


?>