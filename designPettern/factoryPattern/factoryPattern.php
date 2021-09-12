<?php

/// facotory pattern is use for make a object simplify for user as espect for user

/// and also has't not deal with complex object just for make deal with simplify simple object
/// all things works for as a  all neccessary step to take in factory function 

/// after works then just return new object for user can interact with that... 

$cars=[
    "nissan"=>[
        "sunny"=>[
            "make"=> 2004,
            "model"=>"Nissan Sunny B14",
            "displacement"=>"1500cc",
            "feature"=>"some special feature for filder 2004",
        ],
        "sunny-ex"=>[
            "make"=> 2005,
            "model"=>"Nissan Sunny Ex Salon",
            "displacement"=>"1300cc",
            "feature"=>"some special feature for filder 2004",
        ],
    ],
    "toyoto"=>[
        "axio"=>[
            "make"=> 2004,
            "model"=>"Toyoto Corolla Axio",
            "displacement"=>"1500cc",
            "feature"=>"Some special feature for Axio 2004",
        ],
        "filder"=>[
            "make"=> 2005,
            "model"=>"Toyoto Corolla Filder",
            "displacement"=>"1300cc",
            "feature"=>"Some special feature for filder 2004",
        ],
    ],
    
];

class Car{
    private $make,$model,$displacement,$feature;

    function __construct($cardata)
    {
        $this->make=$cardata['make'];
        $this->displacement=$cardata['displacement'];
        $this->model=$cardata['model'];
        $this->feature=$cardata['feature'];
    }

    function __call($name, $arguments=null)
    {
        $parameter = str_replace("get","", strtolower($name));

        if(isset($this->{$parameter})){
            return $this->{$parameter}."\n";
        }
        return "";
    }
}

class CarFactory{
    private $data;
    function __construct($data)
    {
        $this->data=$data;
    }
    function getNissanSunny(){
        $data= $this->data["nissan"]["sunny"];
        return new Car($data);
    }
    function getToyotoAxio(){
        $data= $this->data["toyoto"]["axio"];
        return new Car($data);
    }
}
// $nissanSunny= new Car($cars['nissan']['sunny']);

// echo $nissanSunny->getDisplacement();


$carFactory= new CarFactory($cars);

$nissanSunny = $carFactory->getNissanSunny();

echo $nissanSunny->getFeature();

$toyotoaxio= $carFactory->getToyotoAxio();

echo $toyotoaxio->getModel();
echo $toyotoaxio->getFeature();