<?php
include 'app/models/model_database.php';
Class Model_Main extends Model{
    function get_data(){
        $db = Database::getInstance(); 
        $db->query("SELECT * FROM users");
        $row = $db->resultset();
        return $row;
    }
}