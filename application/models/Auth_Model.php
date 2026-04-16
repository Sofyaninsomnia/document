<?php
class Auth_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function insert($data)
    {
        return $this->db->insert('test', $data);
    }
}