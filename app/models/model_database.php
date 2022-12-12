<?php

class Database
{
    private static ?Database $instance = null;
    private function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=sap;charset=utf8', 'root', 'root');
    }
    private function __clone()
    {
    }
    function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
    static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function query($sql)
    {
        $this->stmt = $this->db->prepare($sql);
    }
    function bind($param, $value)
    {
        $this->stmt->bindValue($param, $value);
    }
    function single()
    {
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    function resultset()
    {
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function execute()
    {
        $this->stmt->execute();
    }
}
