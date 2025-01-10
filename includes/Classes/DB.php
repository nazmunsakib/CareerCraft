<?php 
namespace CareerCraft\Classes;

class DB{
    private $host       = 'localhost';
    private $dbUser     = 'root';
    private $dbPass     = '';
    private $dbName     = 'career_craft';
    private $connect;

    public function connection(){

        $this->connect  = null;

        try{
            //PDO Connection
            $this->connect  = new \PDO("mysql:host=$this->host;dbname=$this->dbName", $this->dbUser, $this->dbPass );
        }catch(\PDOException $e){
            echo "Error : " . $e->getMessage() . "<br/>";
            die();
        }

        return $this->connect;
    }
}