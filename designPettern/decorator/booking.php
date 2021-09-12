<?php

///if you want to decorate you oop code like that you are in a hostel you book a room
/// and also add extra bed and wifi how you mesure how much you pay here actually work
/// decorator pattern to implement interface remain method............ Jobayed Hossen

interface Booking{
    public function calCulatePrice():int;
    public function getDescription():string;
}





abstract class BookingDecorator implements Booking{

    protected $booking;
     public function __construct(Booking $booking)
     {
        $this->booking= $booking;
     }
    abstract public function calCulatePrice():int;
    abstract public function getDescription():string;
 }

 class DoubleRoomBooking implements Booking{
    public function calCulatePrice(): int
    {
        return 40;
    }
    public function getDescription(): string
    {
        return "Double Room Booking";
    }
}
 

class ExtraBed  extends BookingDecorator{
  private const EXTRABED=40;
    public function calCulatePrice(): int
    {
        return $this->booking->calCulatePrice()+self::EXTRABED;

    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() ." with extra bed";
        
    }
   
}

class Wifi extends BookingDecorator{
    private const WIFI=20;
    public function calCulatePrice(): int
    {
        return $this->booking->calCulatePrice()+self::WIFI;

    }
    public function getDescription(): string
    {
        return $this->booking->getDescription() ." and adding wifi bill";
    }
}

$drb= new DoubleRoomBooking;
$eb= new ExtraBed($drb);
$wifi= new Wifi($eb);

echo $wifi->calCulatePrice();
echo "\n ";
echo $wifi->getDescription();


