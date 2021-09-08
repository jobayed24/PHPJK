<?php
require_once "src/Exception.php";
require_once "src/PHPMailer.php";
require_once "src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



class MyErrorSendMail{
    private $findError;
    function setSometing($errhandname,$whichType){
        set_error_handler($errhandname,$whichType );
     
    }
        

    function myErrorSendEmail($errnum,$errstr,$errfile,$errline){
        if($errline!=false){
            $error= "\nError: \n [--$errstr--] in file [---$errfile---] line muber [--$errline--]";
            
          $this->findError=  error_log($error,1,"jkhouse117@gmail.com");
        }
    
    }
    function sendError(){
        return $this->findError;
    }   
    
}
$myError=new MyErrorSendMail;
$myError->setSometing("myErrorSendEmail" ,E_ALL);


$pm=new PHPMailer(true);
try{
    //server setting
    $pm->SMTPDebug=SMTP::DEBUG_SERVER;
    $pm->isSMTP();
    $pm->Host="smtp:gmail.com";
    $pm->SMTPSecure="tls";
    $pm->Port="587";
    $pm->SMTPAuth=true;


    //error receiption
    $pm->setFrom("jkhouse117@gmail.com");
    $pm->Username="jobayed hossen";
    $pm->Password="";
    $pm->addAddress("jkhouse117@gmail.com");

    //content
    $pm->Subject="It's hight time to fix Error";
    $pm->Body=$myError->sendError();

    ///sending Mail
    $pm->send();
    echo "\nsuccesfully error send\n";

}catch(Exception $e){
    echo "There is no error found\n";
}


