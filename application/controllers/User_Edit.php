<?php 

class User_Edit extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $editId = $this->input->get('id');

        $data['editType'] = 'User';
        $data['selected'] = $this->user_model->getUsers($editId);
        $data['editId'] = $data['selected']->id;        
        
        $data['title'] = 'Editing user '.$data['selected']->username;
        $data['customStyle'] = 'edit_view.css';

        $this->load->view('templates/header', $data);
        $this->load->view('edit_view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function updateUser() {
        $updated = $this->user_model->updateUser();
        //Set message in session
        redirect(base_url().'index.php/User');
    }
}

?>