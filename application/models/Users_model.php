<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model 
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

}