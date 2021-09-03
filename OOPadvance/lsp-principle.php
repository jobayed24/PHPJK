<?php

interface Bird{
    function eat();
    function sleep();
    
    
}

class Panguin implements Bird{
    function eat(){

    }
    function sleep(){

    }
    function walk(){
        echo "hay i am panguin i can walk";
    }
}

class Eagle implements Bird{
    function eat(){

    }
    function sleep(){

    }

    function fly(){
        echo "Hay i am eagle do you wanna to fly me.";
    }
}


class BirdManager{
    private $containBird;
    function bird(Bird $manager){
        $this->containBird=$manager;
    }
    function conclusion(){
       return $this->containBird;
    }
   
}

$e=new Eagle;
$p=new Panguin;
$bm=new BirdManager;

$bm->bird($p);
// $bm->bird($e);

// $bm->conclusion()->fly();

$bm->conclusion()->walk();