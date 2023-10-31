<?php 

    class Menu_Edit extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('menu_model');
        }

        public function index() {                        
            $editId = $this->input->get('id');
            
            $data['editId'] = $editId;
            $data['editType'] = 'Menu';
            $data['selected'] = $this->menu_model->getMenu($editId);
            $data['menus'] = $this->menu_model->getMenu(null);

            $data['title'] = 'Editing Menu '.$data['selected']->name;
            $data['customStyle'] = 'edit_view.css';            

            $this->load->view('templates/header', $data);
            $this->load->view('edit_view', $data);
            $this->load->view('templates/footer', $data);
        }

        public function updateMenu() {
            $updated = $this->menu_model->updateMenu();
            
            if ($updated) 
                $this->session->set_userdata(array("msg" => 'Successfully updated menu', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when updating', "type" => 'error'));

            redirect(base_url().'index.php/Menu');
        }        
    }

?>