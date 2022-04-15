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

}