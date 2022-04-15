<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturi extends CI_Controller {

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
        $gaze = $this->input->post('gaze', TRUE);
        $apa = $this->input->post('apa', TRUE);
        $net = $this->input->post('net', TRUE);
        $curent = $this->input->post('curent', TRUE);
        $altele = $this->input->post('altele', TRUE);

        $ins = $this->users_model->signup_add($gaze, $apa, $net, $curent, $altele);
        
        if ($ins) {
            $sess = array(
                'signup_done' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('facturi');
        }
        else {
            $sess = array(
                'signup_failed' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('facturi/add');
        }
    }

}
