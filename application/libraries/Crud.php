<?php 

Class Crud {

    public function addEvents($array,$table){
        $CI =& get_instance();
        $CI->load->database();

        $save = $CI->db->insert($table,$array);
        return $CI->db->insert_id();
    }

    public function getEventData($selects,$table){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select($selects)
                      ->from($table)
                      ->get();
        return $get->result_array();
                      
    }
    public function getsingleevent($id){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('events')
                      ->where('id',$id)
                      ->get();
        return $get->result_array();
                      
    }

    function get_all_cities(){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('cities')
                      ->get();
        return $get->result_array();
    }
    function get_coupon($coupon_name){

        $CI =& get_instance();
        $CI->load->database();

        $coupon = $CI->db->select('*')
                      ->from('coupons')
                      ->where('couponCode',$coupon_name)
                      ->get();
        return $coupon->result_array();
    }

    // All Data Of event By Selected City
    function getAllDataOfEventConnectBySelectedCity($city){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('events')
                      ->where('citys',$city)
                      ->get();
        return $get->result_array();
    }
//Get batch details
    function get_batches(){

        $CI =& get_instance();
        $CI->load->database();

        $coupon = $CI->db->select('*')
                      ->from('batches')
                      ->where('status',1)
                      ->get();
        return $coupon->result_array();
    }

    public function getAvailCouponData($couponCode){
        $CI =& get_instance();
        $CI->load->database();

        $get = $CI->db->select('*')
                      ->from('coupons')
                      ->where('couponCode',$couponCode)
                      ->where('startDate<=',date('Y-m-d'))
                      ->where('endDate>=',date('Y-m-d'))
                      ->get();
        return $get->result_array();
    }

    public function checkForAppliedOrNot($a,$b){
        $CI =& get_instance();
        $CI->load->database();

        $sql = 'SELECT * FROM `appliedcoupons` WHERE `phone`='.$a.' AND `appliedCouponsID`='.$b.'';
        $get = $CI->db->query($sql);
        return $get->result_array();
    }

    public function applyCouponNew($array){
        $CI =& get_instance();
        $CI->load->database();

        $CI->db->insert('appliedcoupons',$array);
        return $CI->db->insert_id();
    }
}