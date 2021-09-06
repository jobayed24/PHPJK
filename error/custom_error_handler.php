<?php


set_error_handler("customNotice",E_NOTICE);

function customNotice($errnm,$errsr,$errfile,$errline){
    echo "\nNotice-- Error:\n [$errnm] in filename [--$errfile--] line [$errline] \n";


    echo "\nprint last of the script\n";
    die();
}





