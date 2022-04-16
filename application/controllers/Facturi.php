<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Facturi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('everything_model');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('download');
    }

    public function index()
    {
        $data['active'] = 'facturi';
        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('facturi', $data);
        } else {
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
        } else {
            $sess = array(
                'Adaugare_factura_failed' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('facturi/add');
        }
    }

    public function photo()
    {
        $data['active'] = 'facturi';
        $data['error'] = '';
        $this->load->view('upload_factura.php', $data);
    }

    public function add_photo()
    {

        $config['upload_path']          = './uploads/' . $this->session->userdata('user_id') . '/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        if (!is_dir('./uploads/' . $this->session->userdata('user_id') . '/')) {
            mkdir('./uploads/' . $this->session->userdata('user_id'), 0777, true);
        }

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {

            $data['error'] = array('error' => $this->upload->display_errors());
            $data['active'] = 'facturi';

            $this->load->view('upload_factura.php', $data);
        } else {
            $data = array('upload_data' => $this->upload->data());

            //$path = 'uploads/' . $this->session->userdata('user_id') . '/' . $data['upload_data']['file_name'];

            $path = $data['upload_data']['full_path'];

            $this->everything_model->factura_poza_add($path);

            $data['active'] = 'facturi';

            $this->load->view('facturi.php', $data);
        }
    }
}
