<?php

interface BaseStudent{
    function getValue();
    function getTitle();
}


class ModifyStudent implements BaseStudent{
    private $title;
    private $name;
    function __construct($name,$title)
    {
        $this->setName($name);  
        $this->setTitle($title);
    }
    function setTitle($title){
        $this->title=$title;
    }
    function setName($name){
        $this->name=$name;
    }
    function getValue(){
        return $this->name;
    }
    function getTitle(){
        return $this->title;
    }

}

class OutPut{
   function tV(BaseStudent $value){
       $value->getValue();
   }
}
class FullOutPut{
    function fOut(BaseStudent $fout){
       echo $fout->getTitle().":".$fout->getValue();
    }
}

$md=new ModifyStudent("jobayed","MR");
$fo=new FullOutPut();
$fo->fOut($md);
$output=new OutPut();
//$output->tV($md);
