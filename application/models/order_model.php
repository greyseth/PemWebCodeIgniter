<?php

class order_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getOrders($id) {
        if (!$id) {
            return $this->db->get('orders')->result();
        }else {
            return $this->db->get_where('orders', array('id' => $id))->result()[0];
        }
    }

    public function createOrder() {
        $data['order_date'] = date('Y-m-d');
        $data['user_id'] = $this->input->post('userIdInput');
        $data['menu_id'] = $this->input->post('menuIdInput');
        $data['status'] = $this->input->post('statusInput');

        //FIXME: Menu and user validation
        // if (count($this->db->get_where('users', array('id =' => $data['user_id']))->result()) <= 0) return false;
        // if (count($this->db->get_where('menu', array('id =' => $data['menu_id']))->result()) <= 0) return false;

        $this->db->insert('orders', $data);

        return (($this->db->affected_rows() !== 1) ? false : $this->db->insert_id());
    }

    public function updateOrder() {
        if ($this->input->post('confirmUpd')) {
            $data['order_date'] = $this->input->post('dateUpd');
            $data['user_id'] = $this->input->post('userIdUpd');
            $data['menu_id'] = $this->input->post('menuIdUpd');
            $data['status'] = $this->input->post('statusUpd');

            $this->db->where('id', $this->input->post('orderId'));
            $this->db->update('orders', $data);

            return $this->db->affected_rows() === 1 ? true : false;
        }
    }

    public function deleteOrder($delId) {
        $this->db->delete('orders', array('id' => $delId));
        return $this->db->affected_rows() === 1 ? true : false;
    }
}

?>