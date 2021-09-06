<?php


////from main domain to local domain if you debug your code just make all display for local like this

if(substr($_SERVER["SERVER_NAME"],-6)==".local"){
    ini_set("display_errors",1);
    ini_set("error_reporting",E_ALL);
}