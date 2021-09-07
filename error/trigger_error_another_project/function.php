<?php

set_error_handler("JOBAYED_NOTICE",E_USER_NOTICE);
function JOBAYED_NOTICE($errnm,$errst,$errfile,$errline){
        echo "\n Error:\n [---$errst---] in file [---$errfile---] line number [---$errline---]\n";
}

function doFunction($var){
    if(is_numeric($var)){
        //Do someting
    }else{
        trigger_error(E_USER_NOTICE) ;
        debug_print_backtrace();
    }
}