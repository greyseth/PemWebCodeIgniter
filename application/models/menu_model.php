<?php 
    class menu_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function getMenu($id) {
            if (!$id) {
                $q = $this->db->get('menu');
                return $q->result();
            }else {
                $q = $this->db->get_where('menu', array('id = '=> $id))->result();
                return $q[0];
            }
        }

        public function createMenu() {
            $data['name'] = $this->input->post('nameInput');
            $data['type'] = $this->input->post('typeInput');
            $data['price'] = $this->input->post('priceInput');
            
            $this->db->insert('menu', $data);
            if ($this->db->affected_rows() != 1) {
                return false;
            }else {
                return $this->db->insert_id();
            }
        }

        public function updateMenu() {
            if ($this->input->post('confirmUpd')) {
                //Gets post data
                $data['name'] = $this->input->post('nameUpd');
                $data['type'] = $this->input->post('typeUpd');
                $data['price'] = $this->input->post('priceUpd');
                
                //Updates db data
                $this->db->where('id', $this->input->post('menuId'));
                $this->db->update('menu', $data);

                return $this->db->affected_rows() === 1 ? true : false;
            }
        }

        public function deleteMenu($delId) {
            // $this->db->where('id', $delId);
            $this->db->delete('menu', array('id' => $delId));
            return $this->db->affected_rows() === 1 ? true : false;
        }
    }
?>