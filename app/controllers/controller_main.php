<?php
class Controller_main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }
    function action_index()
    {
        session_start();
        if($_SESSION['admin'] == 1){
            $data = $this->model->get_data();
            $this->view->generate('main_view.php', 'template_view.php', $data);
        } else {
            Route::LoginPage();
        }
    }
}