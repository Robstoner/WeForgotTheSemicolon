<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturi extends CI_Controller {

    public function index()
    {

        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('Facturi');
        }
        else {
            redirect('login');
        }
        
    }

}