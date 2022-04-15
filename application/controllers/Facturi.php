<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('everything_model');
    }

    public function index()
    {
        $data['active']='facturi';
        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('facturi', $data);
        }
        else {
            redirect('login');
        }
        
    }

    public function add()
    {
        $data['active'] = 'facturi';
        $this->load->view('add-factura.php', $data);
    }

    public function add_factura()
    {
        $factura_type = $this->input->post('facturi_type', TRUE);
        $suma = $this->input->post('suma', TRUE);

        $ins = $this->everything_model->factura_add($factura_type, $suma);
        
        if ($ins) {
            $sess = array(
                'Adaugare_factura_done' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('facturi');
        }
        else {
            $sess = array(
                'Adaugare_factura_failed' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('facturi/add');
        }
    }

}
