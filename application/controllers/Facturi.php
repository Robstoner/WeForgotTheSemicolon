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

        $user_id = $this->session->userdata('user_id');


        $this->db->select('*');
        $this->db->from('facturi');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('data', 'DESC');
        $facturi = $this->db->get()->result();

        $f_gaze = 0;
        $f_apa = 0;
        $f_internet = 0;
        $f_curent = 0;
        $f_altele = 0;

        $now = new DateTime();
        $now = $now->format('Y.m');


        foreach($facturi as $factura) {
            if ($factura->tip == 'Gaze') {
                $f_gaze += $factura->suma;
            } elseif ($factura->tip == 'Apa') {
                $f_apa += $factura->suma;
            } elseif ($factura->tip == 'Internet') {
                $f_internet += $factura->suma;
            } elseif ($factura->tip == 'Curent') {
                $f_curent += $factura->suma;
            } elseif ($factura->tip == 'Altele') {
                $f_altele += $factura->suma;
            }

            if ($now != $factura->data) {
                break;
            }

        }

        $data['gaze'] = $f_gaze;
        $data['apa'] = $f_apa;
        $data['internet'] = $f_internet;
        $data['curent'] = $f_curent;
        $data['altele'] = $f_altele;


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
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 5120;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;

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

            $filename = $data['upload_data']['file_name'];

            $this->everything_model->factura_poza_add($path, $filename);

            $data['active'] = 'facturi';

            redirect('facturi');
        }
    }

    public function download($id)
    {
        $this->db->select('*');
        $this->db->from('poze');
        $this->db->where('id', $id);
        $get = $this->db->get()->row();

        force_download($get->path, NULL);
    }
}
