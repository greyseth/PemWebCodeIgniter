<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');        
    }

    public function index() {
        $data['title'] = 'User view';
        $data['customStyle'] = 'view.css';
        $data['users'] = $this->user_model->getUsers(null);

        if ($this->session->userdata('msg')) {
            $data['message'] = $this->session->userdata('msg');
            $data['messageType'] = $this->session->userdata('type');

            $this->session->unset_userdata('msg');
            $this->session->unset_userdata('type');
        }
        
        $this->load->view('templates/header', $data);
        
        $this->load->view('user/user_table', $data);
        $this->load->view('user/user_form', $data);

        $this->load->view('templates/footer', $data);
    }

    function createUser() {
        $created = $this->user_model->createUser();                

        if ($created) 
                $this->session->set_userdata(array("msg" => 'Successfully added new user', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when creating', "type" => 'error'));

        redirect(base_url().'index.php/User');
    }

    public function deleteUser($delId) {
        $deleted = $this->user_model->deleteUser($delId);
        
        if ($deleted) 
                $this->session->set_userdata(array("msg" => 'Successfully deleted a user', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when deleting', "type" => 'error'));

        redirect(base_url().'index.php/User');
    }
}

?>