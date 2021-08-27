<?php


interface BaseStorage{
    function setFileName($fn);
    function writeData($data);
    function appendData($data);
}


class Storage implements BaseStorage{
    private $fn;
    function __construct($fn)
    {
        $this->setFileName($fn);
    }
    function setFileName($fn)
    {
        $this->fn=$fn;
    }
    function writeData($data)
    {
        file_put_contents($this->fn,$data);
    }
    function appendData($data)
    {
        $this->data=$data;
    }
}

class Result{
    function finalResult($filename,$data){
        $storage=new Storage($filename);
        $storage->writeData($data);
    }
}

$r=new Result();
$r->finalResult("tmt/new.txt","jobayed");




