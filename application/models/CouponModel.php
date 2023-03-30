<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class CouponModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    public function getCoupon($couponeData){

        $this->db->select("*");
        $this->db->from("coupons");
        $this->db->where("coupons.couponCode", $couponeData);
        $query = $this->db->get();

       return $query->result_array();
    }

}