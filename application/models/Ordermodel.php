<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ordermodel extends CI_Model
{

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);
    }

    public function listOrders($userId)
    {
        $this->db->select("*");
        $this->db->where("user_id", $userId);
        $orderList =   $this->db->get('orders')->result_array();
        return $orderList;
    }

    public function totalOrders()
    {
        $this->db->select("*");
        $orderList =   $this->db->get('orders')->result_array();
        return $orderList;
    }

    function printdata($id)
    {
        $this->db->select("*");
        $this->db->from('order_details');
        $this->db->where('order_id', $id);
        $print = $this->db->get()->result_array();
        return $print;
    }

    function printname($id)
    {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('pid', $id);
        $printName = $this->db->get()->result_array();
        return $printName;
    }

    function printprice($id)
    {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('pid', $id);
        $printPrice = $this->db->get()->result_array();
        return $printPrice;
    }
}