<?php 
Class Controller_User extends Controller {
    
    function __construct()
    {
        $this->model = new Model_User();
        $this->view = new View();
    }

    function action_data($login)
    {
        $data = $this->model->get_user($login);
        $this->view->generate('user_view.php', 'template_view.php', $data);
    }
    
    function action_delete($login)
    {
        $this->model->delete_user($login);
        Route::MainPage();
    }

    function action_add()
    {
        $this->view->generate('add_user_view.php', 'template_view.php');
    }
    
    function action_post()
    {
        $this->model->add_user($_POST['login'], $_POST['password'], $_POST['role']);
        Route::MainPage();
    }

}