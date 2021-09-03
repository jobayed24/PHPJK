<?php

///dependecy inversion means it's depend in abstraction not conreations


interface AllAuthentication{
    function authenticat();
}
class AuthenTicator implements AllAuthentication{
    function authenticat()
    {
        echo "auth with google";
    }
}


class Auth{
    private $Authenticator;

    function __construct(AllAuthentication $auth)
    {
        $this->Authenticator=$auth;
    }
    function authen(){
       return $this->Authenticator;
    }

   }

   $ga=new AuthenTicator;
   $a=new Auth($ga);

   $a->authen()->authenticat();