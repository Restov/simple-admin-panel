<?php
Class Controller_Login extends Controller{
    function action_index(){
        $this->view->generate('login_view.php', 'template_view.php');
        session_start();
        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
            Route::MainPage();
        }
    }
    function action_login(){
        $login = $_POST['username'];
        $password = $_POST['password'];
        $model = new Model_Login();
        $model->login($login, $password);
    }
    function action_logout(){
        $model = new Model_Login();
        $model->logout();
    }
}