<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class invoice extends CI_Model
{

    function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('default', true);
    }
    public function checkInvoice($id)
    {
        $this->db->select("*");
        $this->db->from('order_details');
        $this->db->where('product_id', $id);
        $checkInvoice = $this->db->get()->result_array();
        return $checkInvoice;
    }
}