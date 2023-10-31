<?php 
    class Menu extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('menu_model');          
        }

        public function index() {
            $data['title'] = 'Menu view';
            $data['customStyle'] = 'view.css';
            $data['menus'] = $this->menu_model->getMenu(null);

            if ($this->session->userdata('msg')) {
                $data['message'] = $this->session->userdata('msg');
                $data['messageType'] = $this->session->userdata('type');

                $this->session->unset_userdata('msg');
                $this->session->unset_userdata('type');
            }

            $this->load->view('templates/header', $data);

            $this->load->view('menu/menu_table', $data);
            $this->load->view('menu/menu_form', $data);

            $this->load->view('templates/footer', $data);
        }

        public function createMenu() {
            $created = $this->menu_model->createMenu();
            
            if ($created) 
                $this->session->set_userdata(array("msg" => 'Successfully added new menu', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when creating', "type" => 'error'));

            redirect(base_url().'index.php/Menu');
        }
        
        public function deleteMenu($delId) {
            $deleted = $this->menu_model->deleteMenu($delId);

            if ($deleted) 
                $this->session->set_userdata(array("msg" => 'Successfully deleted menu', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when deleting', "type" => 'error'));

            redirect(base_url().'index.php/Menu');
        }
    }
?>