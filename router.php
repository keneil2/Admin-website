<?php 
class Router{
 private $uri=[
    "/keneil%20samms-march-2024-Assignment_Mini%20project/Admin_Webpage/"=>"index.php",
 ];
 public function setUri(string $uri,string $filePath){
    $this->uri[$uri]=$filePath;
 }
 public function getUri(){
    return $this->uri;
 }
public function runRouter(){
    if(array_key_exists($_SERVER["REQUEST_URI"],$this->uri)){
       require_once $this->uri[$_SERVER["REQUEST_URI"]] ;
    }
} 
}