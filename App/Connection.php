<?php

namespace App;

class Connection{

    public static function getDb(){
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                "toor"
            );
            return $conn;
        } catch (\PDOException $e) {
            print_r($e);
            foreach($e as $key => $value){
                echo($key . " = ". $value . "<br>");
            }
        }
    }
}
?>