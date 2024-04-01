<?php 
class dbcon{
    private $host="localhost";
    private $dbName="admin";
    private $username="root";
    private $pwd="";
    function dbconnection(){
        try{
            $pdo=new PDO("mysql:host=$this->host;dbname=$this->dbName",$this->username,$this->pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             return $pdo;
        }catch(PDOException $e){
        throw new Exception ("Connection failed:". $e->getMessage());
        }
        
    }
}