<?php

class Conexion{

    static public function conectar(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=ventasdb","admin","123",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            // $conn = new PDO("mysql:host=localhost;dbname=mitiendaposfacturador","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();            
        }

    }
}
