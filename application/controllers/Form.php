<?php
class Form extends CI_Controller
{
    public function index()
    {
        $this->load->view('test');
    }

    public function create()
    {
        print_r($_POST);
        die;

        if ($this->input->post()) {
            $input_produk = $this->input->post('nama_produk');
            $data['produk'] = $input_produk;
            $this->load->view('report', $data);
        } else {
            redirect('report');
        }
    }
}
