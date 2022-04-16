<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Everything_model extends CI_Model 
{

    public function signup_add($username, $name, $password, $phone, $email)
    {
        // hash password
        $timeTarget = 0.05; // 50 millisec. 
        $cost = 8;
        do {
            $cost++;
            $start = microtime(true);
            $hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => $cost]);
            $end = microtime(true);
        } while (($end - $start) < $timeTarget);

        $set = array(
            'username' => $username,
            'email' => $email,
            'phone' => $phone, 
            'name' => $name,
            'password' => $hash
        );

        $this->db->insert('users', $set);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function factura_add($tip, $suma)
    {
        $now = new DateTime();
        $date = $now->format('Y.m');
        $set = array(
            'data' => $date,
            'user_id' => $this->session->userdata('user_id'),
            'tip' => $tip,
            'suma' => $suma
        );

        $this->db->insert('facturi', $set);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function consum_add($suma)
    {
        $now = new DateTime();
        $date = $now->format('Y.m');
        $set = array(
            'data' => $date,
            'user_id' => $this->session->userdata('user_id'),
            'suma' => $suma
        );

        $this->db->insert('consum', $set);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function factura_poza_add($path)
    {
        $now = new DateTime();
        $date = $now->format('Y.m');
        $set = array(
            'data' => $date,
            'user_id' => $this->session->userdata('user_id'),
            'path' => $path
        );

        $this->db->insert('poze', $set);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function check_first_day()
    {
        $now = new DateTime();
        $day = $now->format('d');

        if ($day == '1') {
            
            $this->db->select('*');
            $this->db->from('users');
            $get = $this->db->get()->result();

            $date = $now->format('Y.m');

            foreach ($get as $user) {

                $set = array(
                    'user_id' => $user->id,
                    'salariu' => $user->salariu,
                    'data' => $date
                );

                $this->db->insert('salariu', $set);

            }

        }
    }

}