<?php

interface PaymentProcess{
    function sendPayment($amount);

}

class Paypal implements PaymentProcess{
    function sendPayment($amount,$currency=null){
        echo "Paypal process {$amount} \n";
    }
}

class Stripe{
     function makePayment($amount,$currency=null){
            echo "Stripe process {$amount}";
     }
}
class PaymentGateway{
    private $paymentGateway;
    function __construct(PaymentProcess $pg)
    {
        $this->paymentGateway=$pg;
    }
    function purchessProduct($amount,$currency=null){
        $this->paymentGateway->sendPayment($amount,$currency);
    }
}
class StripeAdapter implements PaymentProcess{
    private $stripe;
    function __construct(Stripe $st)   
    {
        $this->stripe = $st;

    }
    function sendPayment($amount){
        $this->stripe->makePayment($amount);
    }
}

$pp=new Paypal;
$st= new Stripe;
$sa=new StripeAdapter($st);
$pg= new PaymentGateway($pp);
$pg->purchessProduct(40);