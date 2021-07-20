<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Adminmodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);
    }

    /////////////////////////////////////////-------------------------Users---------------------------/////////////////////////////////////////

    public function getUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        $checkUser =  $this->db->get()->result_array();
        return $checkUser;
    }

    public function deleteUsers($id)
    {
        $this->db->where('uid', $id);
        $this->db->delete('users');
    }
}