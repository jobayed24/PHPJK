<?php

interface Bird{
   
    function sleep();
}

interface FlyBird extends Bird{
    function fly();
}

interface WalkBird extends Bird{
    function walk();
}


class Eagle implements FlyBird{
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

class Ostratish implements WalkBird{
    function eat(){

    }
    function sleep(){

    }
    function walk(){

    }
}