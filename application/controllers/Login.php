<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('everything_model');
    }

    public function index()
    {

        if ($this->session->userdata('logged')) {
            redirect('home');
        } else {
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged');
        redirect('login');
    }

    public function login_engine()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $get = $this->db->get();
        if ($get->num_rows() != 1) {
            $sess = array(
                'login_error' => TRUE,
            );

            $this->session->set_flashdata($sess);

            redirect('login');
        } else {
            $get = $get->row();

            $hash = $get->password;

            if (password_verify($password, $hash)) {
                $sess = array(
                    'logged' => TRUE,
                    'user_id' => $get->id,
                    'username' => $get->username,
                    'salariu' => $get->salariu,
                );

                $this->session->set_userdata($sess);

                redirect('home');
            } else {
                $sess = array(
                    'wrong_pass' => TRUE
                );

                $this->session->set_flashdata($sess);

                redirect('login');
            }
        }
    }

    public function signup()
    {


        $this->load->view('signup');
    }

    public function signup_engine()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $email = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone', TRUE);
        $name = $this->input->post('name', TRUE);

        $ins = $this->users_model->signup_add($username, $name, $password, $phone, $email);
        
        if ($ins) {
            $sess = array(
                'signup_done' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('login');
        }
        else {
            $sess = array(
                'signup_failed' => TRUE
            );

            $this->session->set_flashdata($sess);

            redirect('login/signup');
        }
    }

    public function forgot_pass(){
        
        $this->load->view('forgot-pass');
    }
}
