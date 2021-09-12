<?php


///----------------Abstract Factory ------------------

// you have a class it's return an object base as your dession ... 
// and this object also return another object..... 
// it's  called factory return factory and it's return also factory.... 

/// for this remain same method comply just use one abstarct class and it's have 
// one abstract function ............     


///---------------------Jobayed Hossen-----------------------//////////



class Truck{
    function getName(){
        echo "Truck \n";
    }

}

class Car{
    function getName(){
        echo "Cars \n";
    }
}

abstract class VFactory{
    abstract function create();
}

class CarFactory extends VFactory{
    function create()
    {
        return new Car();
    }
}

class TruckFactory extends VFactory{
    function create()
    {
        return new Truck();
    }
}

class VehicleFactory{
   function getFactory($type="car"){
       if("car"==$type){
           return new CarFactory();
       }elseif("truck"==$type){ 
        return new TruckFactory();
       }
   }
}

$vf=new VehicleFactory();

$tf=$vf->getFactory("truck");
$cf= $vf->getFactory("car");
$car=$cf->create();
$truck= $tf->create();
echo $car->getname();
echo $truck->getName();
