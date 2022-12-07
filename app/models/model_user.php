<?php
include 'app/models/model_database.php';
Class Model_User extends Model{
    function get_user($login){
        $db = new Database();
        $db->query("SELECT * FROM users WHERE login = :login");
        $db->bind(':login', $login);
        $row = $db->single();
        if(!$row){
            Route::ErrorPage404();
        }
        return $row;
    }
}