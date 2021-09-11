<?php

class EntrySingle{
    static $singletoon;

    function __construct()
    {
        echo "new Insatance created\n";
    }

    static function getIntance(){
        if(!self::$singletoon){
            self::$singletoon = new EntrySingle();
        }else{
            echo "old instance supplied\n";
        }
        return self::$singletoon;
        
    }

}


$es=EntrySingle::getIntance();

$es1=EntrySingle::getIntance();

$es2= EntrySingle::getIntance();