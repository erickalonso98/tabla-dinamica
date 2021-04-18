<?php 
function conectar(){
    $host = "localhost";
    $dbname = "tienda_abarrotes";
    $user = "root";
    $password = "";
       try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
            return $conn;
       }catch(PDOException $e){
            die('failed '.$e->getMessage());
       } 
}
     
?>