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

    function delete_user($login){
        $db = new Database();
        $db->query("SELECT * FROM users WHERE login = :login");
        $db->bind(':login', $login);
        $row = $db->single();
        if($row['role'] == 'admin'){
            Route::MainPage();
            session_start();
            $_SESSION['error'] = "You can't delete admin<br>";
        }
        else{
            $db->query("DELETE FROM users WHERE login = :login");
            $db->bind(':login', $login);
            $db->execute();
        }
    }

    function add_user($login, $password, $role){
        $db = new Database();
        $db->query("SELECT * FROM users WHERE login = :login");
        $db->bind(':login', $login);
        $row = $db->single();
        if($row){
            Route::MainPage();
            session_start();
            $_SESSION['error'] = "User with this login already exists<br>";
        }
        else{
            $password = md5($password);
            $db->query("INSERT INTO users (login, password, role) VALUES (:login, :password, :role)");
            $db->bind(':login', $login);
            $db->bind(':password', $password);
            $db->bind(':role', $role);
            $db->execute();
        }
    }
}