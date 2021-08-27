<?php


interface BaseStorage{
    function setFileName($fn);
    function writeData($data);
    
}


class Storage implements BaseStorage{
    private $fn;
    private $mode;
    function __construct($fn,$mode=null)
    {
        $this->setFileName($fn);
        $this->mode($mode);
    }
    function setFileName($fn)
    {
        $this->fn=$fn;
    }
    function writeData($data)
    {
        file_put_contents($this->fn,$data,$this->mode);
    }
    function mode($mode){
        $this->mode=$mode;
    }
    
}




class DataManager{
    function saveData(BaseStorage $storage,$data){
        $storage->writeData($data);
       
    }
}


$s=new Storage("tmt/new.txt");
$s->mode(FILE_APPEND);
$dm=new DataManager();

$dm->saveData($s,"\n 3 my name is JK ");



