<?php

class TakeSource{
    private $source;
   public function collectSource(BaseClass $data){
       $this->source=$data;
   }

   public function exucativeData(){
       $data=$this->source->save();
       print_r($data);
       
   }
   public function addData($value){
       $this->source->update($value);
   }
   public function removeData($data){
       $this->source->delete($data);

   }

}

interface BaseClass{
    public function load();
    public function save();
    public function update($add);
    public function delete($remove);

    
}

class MySqlOrderSource implements BaseClass{
  
    private $load;
    public function __construct()
    {
        $this->load=array("apple","jackfruit","pineapple");
    }
    public function load(){
    //    array_push($this->load,[]);
      
       
    }
    public function save(){
       return $this->load;
    }
    public function update($add){
        array_push($this->load,$add);
    }
    public function delete($remove){ 
        $findValue=array_search($remove,$this->load);
        if($findValue!==false){
            unset($this->load[$findValue]);
        }else{
            echo "not find desire value\n";
        }
       
    }
}

class ApiSourcesData implements BaseClass{
    
    private $load;
    public function __construct()
    {
        $this->load=array();
    }
    public function load(){
        array_push($this->load,['apple',"jackfruit","pineapple"]);
        
    }
    public function save(){
        $this->load;
    }
    public function update($add){
        array_push($this->load,$add);
    }
    public function delete($remove){ 
        unset($this->load,$remove);
    }
}

$mysql=new MySqlOrderSource;

$final=new TakeSource;

$final->collectSource($mysql);
$final->addData("kmne sombos");
$final->exucativeData();
$final->removeData("apple");
$final->exucativeData();
$final->addData("mango");
$final->exucativeData();