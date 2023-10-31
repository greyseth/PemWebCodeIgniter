<?php

class user_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getUsers($id) {
        if (!$id) {
            return $this->db->get('users')->result();
        }else {
            return $this->db->get_where('users', array('id =' => $id))->result()[0];
        }
    }

    public function createUser() {
        $newData['name'] = $this->input->post('nameInput');
        $newData['username'] = $this->input->post('usernameInput');
        $newData['password'] = $this->input->post('passwordInput');
        $newData['level'] = $this->input->post('levelInput');

        $this->db->insert('users', $newData);    
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function updateUser() {
        if ($this->input->post('confirmUpd')) {
            $data['name'] = $this->input->post('nameUpd');
            $data['username'] = $this->input->post('usernameUpd');
            $data['password'] = $this->input->post('passwordUpd');
            $data['level'] = $this->input->post('levelUpd');

            $this->db->where('id', $this->input->post('userId'));
            $this->db->update('users', $data);

            return $this->db->affected_rows() === 1 ? true : false;
        }
    }

    public function deleteUser($delId) {
        $this->db->delete('users', array('id' => $delId));
        return $this->db->affected_rows() === 1 ? true : false;
    }
}

?>