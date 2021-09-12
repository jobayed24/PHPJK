<?php

///another example of abstract factory desing pattern dession making for 
/// connect with databse................... 

//---------------------Jobayed Hossen-----------------------

class MySql{
    function getConnecton(){
        echo "mySql has Connected";
    }
}
class SQLServer{
    function getConnecton(){
        echo "SQLServer has been Connection ";
    }
}
class PostGreSql{
    function getConnecton(){
        echo "PostGreSQl has Successfully Connection";
    }
}

abstract class DBConnectionFactory{
    abstract function create();
}


class MySqlFactory extends DBConnectionFactory{
    function create(){
        return new MySql();
    }   
}

class PosGreSqlFactory extends DBConnectionFactory{
    function create(){
        return new PostGreSql();
    }
}

class SQLServerFactory extends DBConnectionFactory{
    function create(){
        return new SQLServer();
    }
}

class DBConnctionFacorty{
    function getSql(){
        return new MySqlFactory();
    }
    function getPostGre(){
        return new PosGreSqlFactory();
    }
    function getSQLServer(){
        return new SQLServerFactory();
    }
    function dbCon($type){
        if($this->getSql()==$type){
            return $this->getSql();
        }
        if($this->getPostGre()==$type){
            return $this->getPostGre();
        }
        if($this->getSQLServer()==$type){
            return $this->getSQLServer();
        }
    }
}

$dbFactory=new DBConnctionFacorty();
$mysql= $dbFactory->getSql();

$finalmysql=$mysql->create();

echo $finalmysql->getConnecton();
echo "\n";
$postgresql = $dbFactory->getPostGre();
$postGrecon=$postgresql->create();

echo $postGrecon->getConnecton();
