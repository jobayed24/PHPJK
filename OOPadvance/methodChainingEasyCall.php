<?php

class StringUtility{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string=$string;
    }

    function search($string){
        $this->search=$string;
        return $this;
    }
    function replace($rstring){
        if(!$this->search){
            throw new Exception("Nothing found Data");
        }else{
        $this->string= str_replace($this->search,$rstring,$this->string);
        }
        
        return $this;
        $this->string="";
        
        

    }
    function stringUperCase(){
       $this->string= strtoupper($this->string);
        return $this;
    }
    function stringLowerCase(){
      $this->string=  strtolower($this->string);
        return $this;
    }

    function echo(){
        print($this->string);
    }

}

$su=new StringUtility("hello world");

$su->search("hello")
->replace("My")
->search("world")
->replace("planet")
->stringLowerCase()
->stringUperCase()
->echo();


///finish 