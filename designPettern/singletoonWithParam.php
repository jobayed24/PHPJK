<?php

class SomeClass{
    static $singetoon=array();
    private $filename;

    function __construct($filename)
    {
        $this->filename=$filename;
        

        
    }

    static function getInstance($filename){
    if(!isset(self::$singetoon[$filename])){
        
            self::$singetoon[$filename]= new SomeClass($filename);
        
    }
    return self::$singetoon[$filename];
        
    }
     function WriteData($name){
       echo "writing Data to {$this->filename}\n";
    }
    static function dump(){
       print_r( self::$singetoon);
    }
 
}


$sc= SomeClass::getInstance("tmp/abcd.txt");
$sc1= SomeClass::getInstance("tmp/abc.txt");
$sc2= SomeClass::getInstance("tmp/abcd.txt");
$sc2= SomeClass::getInstance("tmp/abcc.txt");
$sc->WriteData("joayed");
$sc1->WriteData("joayed");
$sc2->WriteData("joayed");

SomeClass::dump();




