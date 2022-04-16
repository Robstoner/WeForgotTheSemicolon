<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consum extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('everything_model');
    }

    public function index()
    {
        $data['active']='consum';

        $user_id = $this->session->userdata('user_id');

        $this->db->select('*');
        $this->db->from('poze');
        $this->db->where('user_id', $user_id);
        $get = $this->db->get()->result();

        $data['poze_facturi'] = $get;

        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('consum', $data);
        }
        else {
            redirect('login');
        }
        
    }

    public function add()
    {
        $data['active'] = 'consum';
        $this->load->view('add-consum.php', $data);
    }

    public function add_consum()
    {
        $suma = $this->input->post('suma', TRUE);

        $ins = $this->everything_model->consum_add($suma);
        
        if ($ins) {
            $sess = array(
                'Adaugare_consum_done' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('consum');
        }
        else {
            $sess = array(
                'Adaugare_consum_failed' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('consum/add');
        }
    }


}