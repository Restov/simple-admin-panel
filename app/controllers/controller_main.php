<?php
class Controller_main extends Controller
{
    function action_index()
    {
        session_start();
        if($_SESSION['admin'] == 1){
            $this->view->generate('main_view.php', 'template_view.php');
        } else {
            Route::LoginPage();
        }
    }
}