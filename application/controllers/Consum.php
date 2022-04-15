<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consum extends CI_Controller {

    public function index()
    {

        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('Consum');
        }
        else {
            redirect('login');
        }
        
    }

}