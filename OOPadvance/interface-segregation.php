<?php


interface Animal{
    function  eat();
    function sleep();
   
}

interface Human{
    function read();
}

interface Noread{
    function canCall();
}
class Man implements Animal,Human{
    function eat(){

    }
    function sleep(){

    }
    function read(){
        
    }
}

class Cow implements Animal,Noread{
    function eat(){

    }
    function sleep(){

    }
    function canCall()
    {
        
    }

}