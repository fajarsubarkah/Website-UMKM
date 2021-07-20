<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('about');
    }

    public function index()
    {

        $cnt_data = array();
        date_default_timezone_set('Asia/Jakarta'); //
        $currentDate = date('d-m-Y H:i:s', time());

        redirect('shop/about', 'refresh');
    }
}