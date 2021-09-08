<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";


$pm=new  PHPMailer(true);

try{
    //server Setting....
    $pm->SMTPDebug=SMTP::DEBUG_SERVER;
    $pm->isSMTP();
    $pm->Host= "smtp.gmail.com";
   
    $pm->Username="jkhouse117@gmail.com";
    $pm->Password= "jrszqoamitatqehw";
    $pm->SMTPSecure="tls";
    $pm->Port=587;
    $pm->SMTPAuth=true;


    ///Recieption......
    $pm->setFrom("jkhouse117@gmail.com");
    $pm->addAddress("jkhouse117@gmail.com");


    //Content ...
    $pm->isHTML(true);
    $pm->Subject="oi kmn acos?";
    $pm->Body="shakawat kmn ascos?";
    $pm->AltBody="Allah amar pase thak";

    ///sending critiria
    $pm->send();
    echo "Messenge Has been Sent";




}catch (Exception $e){
    echo "Messenge Failed";    
}
