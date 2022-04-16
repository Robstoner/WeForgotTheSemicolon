<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['active']='home-page';

        $user_id = $this->session->userdata('user_id');

        $this->db->select('*');
        $this->db->from('salariu');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('data', 'DESC');
        $get = $this->db->get()->row();

        $salariu = $get->salariu;

        $data['cas'] = (20/100) * $salariu;
        $data['cass'] = (10/100) * $salariu;
        $data['iv'] = (10/100) * $salariu;


        $this->db->select('*');
        $this->db->from('facturi');
        $this->db->where('user_id', $user_id);
        $facturi = $this->db->get()->result();

        $now = new DateTime();
        $now = $now->format('Y.m');

        $facturi_total = 0;

        foreach($facturi as $factura) {
            if ($now == $factura->data) {
                $facturi_total += $factura->suma;
            }
        }

        $data['facturi'] = $facturi_total;

        $this->db->select('*');
        $this->db->from('consum');
        $this->db->where('user_id', $user_id);
        $consumabile = $this->db->get()->result();

        $consum_total = 0;

        foreach($consumabile as $consumabil) {
            if ($now == $consumabil->data) {
                $consum_total += $consumabil->suma;
            }
        }

        $data['consum'] = $consum_total;

        $data['rest'] = $salariu - $data['consum'] - $data['facturi'] - $data['iv'] - $data['cass'] - $data['cas'];






        if ($this->session->userdata('logged', TRUE)) {
            $this->load->view('home-page', $data);
        }
        else {
            redirect('login');
        }
        
    }

}