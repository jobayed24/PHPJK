<?php

set_error_handler("myErrorHandler",E_PARSE | E_NOTICE | E_WARNING & E_COMPILE_ERROR);


function myErrorHandler($errn,$errst,$errfile,$errline){
    echo "\nError:$errn\n {$errst} file [----$errfile----] line [---$errline---]";
}

echo 2/0;

echo $name;

echo $a+$b;

