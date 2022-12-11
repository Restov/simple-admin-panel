<?php
class Controller_main extends Controller
{
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }
    function action_list()
    {
        session_start();
        if($_SESSION['admin'] == 1){
            $data['users'] = $this->model->get_data();
            if(isset($_GET['page'])){
                $data['page'] = $_GET['page'];
                if(!is_numeric($data['page']) || $data['page'] < 1){
                    $data['page'] = 1;
                }
            }
            else{
                $data['page'] = 1;
            }
            $this->view->generate('main_view.php', 'template_view.php', $data);
        } else {
            Route::LoginPage();
        }
    }
    
}