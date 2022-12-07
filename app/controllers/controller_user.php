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




}