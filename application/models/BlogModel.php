<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogModel extends CI_Model
{
    //TODO: Refactor this model into other Models later
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function verifyUserStatus($mobile)
    {
        $result = $this->db->query('update otp_verification set verification_status = "Yes" where contact_Number = ' . $mobile);
        return $result;
    }

    public function checkNgoPassword($username, $password)
    {
        $this->db->select('Ngo_Username, Ngo_passward');
        $this->db->from('ngo_login');
        $this->db->where('Ngo_Username', $username);
        $this->db->where('Ngo_passward', $password);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
