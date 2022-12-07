<?php

Class Database{
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=sap;charset=utf8', 'root', 'root');
    }
    function query($sql){
        $this->stmt = $this->db->prepare($sql);
    }
    function bind($param, $value){
        $this->stmt->bindValue($param, $value);
    }
    function single(){
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    function resultset(){
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}