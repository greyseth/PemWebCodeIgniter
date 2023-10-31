<?php 

class Order_Edit extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    public function index() {
        $editId = $this->input->get('id');

        $data['selected'] = $this->order_model->getOrders($editId);
        $data['editId'] = $editId;
        $data['editType'] = 'Order';
        $data['customStyle'] = 'edit_view.css';
        $data['title'] = 'Editing Order Number '.$editId;

        $this->load->view('templates/header', $data);
        $this->load->view('edit_view', $data);
        $this->load->view('templates/footer', $data);
    }

    public function updateOrder() {
        $updated = $this->order_model->updateOrder();
        //TODO: Add session message
        redirect(base_url().'index.php/Order');
    }
}

?>