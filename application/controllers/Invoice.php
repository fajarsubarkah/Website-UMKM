<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Invoice extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        include_once APPPATH . '/third_party/fpdf.php';
        // require('/third_party/fpdf/fpdf.php');
        $this->load->database();
        // $this->load->helper('url');
        // $this->load->model('Invoicemodel');
    }

    function index()
    {

        error_reporting(0);
        $pdf = new FPDF('P', 'mm', 'A4');

        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 14);

        $pdf->image('img/dthrift.jpeg', 9, 5, 40);
        $pdf->Cell(130, 5, '', 0, 0);
        $pdf->Cell(59, 5, 'INVOICE', 0, 1);

        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(130, 5, 'Jl. Soekarno - Hatta No.114', 0, 0);
        $pdf->Cell(59, 5, '', 0, 1);

        $pdf->Cell(130, 5, 'Pekanbaru, Riau', 0, 0);
        $pdf->Cell(25, 5, 'Date', 0, 0);
        $orderdate = $this->db->get('orders')->result();
        foreach ($orderdate as $order) {
            $pdf->Cell(34, 5, $order->order_date, 0, 1);
        }


        $pdf->Cell(130, 5, '+62 852-6311-0381', 0, 0);
        $pdf->Cell(25, 5, 'Invoice #', 0, 0);
        $orderdate = $this->db->get('orders')->result();
        foreach ($orderdate as $order) {
            $pdf->Cell(34, 5, $order->order_id, 0, 1);
        }

        $pdf->Cell(130, 5, 'd.thrift@gmail.com', 0, 0);
        $pdf->Cell(25, 5, 'Customer ID', 0, 0);
        $orderdate = $this->db->get('orders')->result();
        foreach ($orderdate as $order) {
            $pdf->Cell(34, 5, $order->user_id, 0, 1);
        }


        $pdf->Cell(189, 10, '', 0, 1);


        $pdf->Cell(100, 5, 'Bill to', 0, 1);

        $pdf->Cell(10, 5, '', 0, 0);
        $fullname = $this->db->get('billing_details')->result();
        foreach ($fullname as $fullname_invoice) {
            $pdf->Cell(90, 5, $fullname_invoice->name, 0, 1);
        }

        $pdf->Cell(10, 5, '', 0, 0);
        $email_invoice = $this->db->get('billing_details')->result();
        foreach ($email_invoice as $email) {
            $pdf->Cell(90, 5, $email->email, 0, 1);
        }

        $pdf->Cell(10, 5, '', 0, 0);
        $street_invoice = $this->db->get('billing_details')->result();
        foreach ($street_invoice as $street) {
            $pdf->Cell(90, 5, $street->street, 0, 1);
        }

        $pdf->Cell(10, 5, '', 0, 0);
        $phone_invoice = $this->db->get('billing_details')->result();
        foreach ($phone_invoice as $phone) {
            $pdf->Cell(90, 5, $phone->phone, 0, 1);
        }

        $pdf->Cell(189, 10, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(100, 5, 'Item', 1, 0);
        $pdf->Cell(25, 5, 'PPN', 1, 0);
        $pdf->Cell(25, 5, 'Shipping', 1, 0);
        $pdf->Cell(37, 5, 'Price', 1, 1);

        $pdf->SetFont('Arial', '', 12);

        $userId = $this->session->userdata('userID');
        $order_details = $this->Invoicemodel->checkInvoice($userId);
        foreach ($order_details as $item) {
            $pdf->Cell(100, 5, $item['pname'], 1, 0);
        }

        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(37, 5, '3,250', 1, 1, 'R');

        $pdf->Cell(100, 5, 'XXX', 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(37, 5, '1,200', 1, 1, 'R');

        $pdf->Cell(100, 5, 'XXX', 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(37, 5, '1,000', 1, 1, 'R');

        $pdf->Cell(125, 5, '', 0, 0);
        $pdf->Cell(25, 5, 'Subtotal', 0, 0);
        $pdf->Cell(7, 5, 'Rp', 1, 0);
        $pdf->Cell(30, 5, '4,450', 1, 1, 'R');

        $pdf->Cell(125, 5, '', 0, 0);
        $pdf->Cell(25, 5, 'PPN', 0, 0);
        $pdf->Cell(7, 5, 'Rp', 1, 0);
        $pdf->Cell(30, 5, '0', 1, 1, 'R');


        $pdf->Cell(125, 5, '', 0, 0);
        $pdf->Cell(25, 5, 'Total', 0, 0);
        $pdf->Cell(7, 5, 'Rp', 1, 0);
        $pdf->Cell(30, 5, '4,450', 1, 1, 'R');


        $pdf->Output('D', 'invoice_dthrift.pdf');
    }
}