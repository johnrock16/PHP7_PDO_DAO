<?php

    class Sql extends PDO{

        private $con;

        public function __construct(){

            $this->con=new PDO("mysql:host=localhost;dbname=bd_PHP_PDO","root","root");        
        
        }

        private function setParams($statement, $paramenters=array()){

            foreach($paramenters as $key =>$value){

                $this->setParam($statement,$key, $value);

            }

        }

        public function setParam($statement, $key, $value){

            $statement->bindParam($key,$value);

        }

        public function query($rawQuery, $params=array()){

            $stmt= $this->con->prepare($rawQuery);

            $this->setParams($stmt,$params);

            $stmt->execute();

            return $stmt;

        }

        public function select($rawQuery,$params=array()):array{

            $stmt=$this->query($rawQuery, $params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

    }


?>