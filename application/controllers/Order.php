<?php

class Order extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('order_model'); 
        $this->load->model('user_model') ;
        $this->load->model('menu_model');
    }

    public function index() {
        $data['title'] = 'Order view';
        $data['customStyle'] = 'view.css';
        $data['orders'] = $this->order_model->getOrders(null);
        $data['users'] = $this->user_model->getUsers(null);
        $data['menus'] = $this->menu_model->getMenu(null);

        if ($this->session->userdata('msg')) {
            $data['message'] = $this->session->userdata('msg');
            $data['messageType'] = $this->session->userdata('type');

            $this->session->unset_userdata('msg');
            $this->session->unset_userdata('type');
        }

        $this->load->view('templates/header', $data);

        $this->load->view('order/order_table', $data);
        $this->load->view('order/order_form', $data);

        $this->load->view('templates/footer', $data);
    }

    public function createOrder() {
        $created = $this->order_model->createOrder();        

        if ($created) 
                $this->session->set_userdata(array("msg" => 'Successfully added a new order', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when creating', "type" => 'error'));

        redirect(base_url().'index.php/Order');
    }

    public function deleteOrder($delId) {
        $deleted = $this->order_model->deleteOrder($delId);
        
        if ($created) 
                $this->session->set_userdata(array("msg" => 'Successfully deleted an order', "type" => "success"));
            else $this->session->set_userdata(array("msg"=>'There has been a problem when deleting', "type" => 'error'));

        redirect(base_url().'index.php/Order');
    }
}

?>