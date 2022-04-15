<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consum extends CI_Controller {

    public function index()
    {
        $data['active']='consum';
        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('consum', $data);
        }
        else {
            redirect('login');
        }
        
    }

}