<?php

if(!class_exists('DataBase')){
class DataBase{
    
    private $connect;
    private string $DbHost;
    private string $DbName;
    private string $DbUsername;
    private string $DbPassword;

    public function __construct(string $DbHost, string $DbName,string $DbUsername,string $DbPassword){
    $this->DbHost = $DbHost;
    $this->DbName= $DbName;
    $this->DbUsername = $DbUsername;
    $this->DbPassword = $DbPassword;
    }
    public function connect(){
        $this->connect = new PDO ("mysql:host =$this->DbHost;dbname=$this->DbName",$this->DbUsername,$this->DbPassword);
        return $this->connect;
    }
    public function close(){
        $this->connect = null;
        echo "Database Disconnected";
    }

    // public function SelectAll($Table){
    //   $result = $this->connect->prepare(" SELECT * FROM  :Table");
    //   $result->execute(['Table' => $Table]);
    //   return $result->fetchAll();
    // }

}
}
?>