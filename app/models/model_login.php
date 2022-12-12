<?php
include 'app/models/model_database.php';
Class Model_Login extends Model{
 
    function login($login, $password){
        $db = Database::getInstance();
        $db->query("SELECT * FROM users WHERE login = :login");
        $login = htmlspecialchars($login);
        $db->bind(':login', $login);
        $row = $db->single();
        $password = md5($password);
        $hashed_password = $row['password'];
        if($password == $hashed_password && $row['role'] == 'admin'){
            session_start();
            $_SESSION['admin'] = 1;
            Route::MainPage();
        } else {
            Route::LoginPage();
        }
    }
    function logout(){
        session_start();
        $_SESSION['admin'] = 0;
        Route::LoginPage();
    }
}