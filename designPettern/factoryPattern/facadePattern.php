<?php


// scequencially call all function in one class it's called facade Pattern


class AirePlane{
    function takeOff(){
        echo "Ready to cheack engin\n\n ";

    }
    function engine(){
        echo "Ready to cheack fuel\n\n ";
    }
    function fuel(){
        echo "Everything is done ready to Take OFF\n \n ";
    }
    function finallyTakeOff(){

        echo "ALL done \n \n Ready And enjoy your flight";
    }
}

class CheakAllPart{
    private $airplane;
  function __construct(AirePlane $air)
  {
      $this->airplane =$air;
  }
    function finallyTakeOff(){
        $this->airplane->takeOff();
        $this->airplane->engine();
        $this->airplane->fuel();
        $this->airplane->finallyTakeOff();
    }

}
$airPl = new AirePlane();
$cpl = new CheakAllPart($airPl) ;

$cpl->finallyTakeOff();
