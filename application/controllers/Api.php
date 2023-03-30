<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
      require(APPPATH.'/libraries/REST_Controller.php');
      class Api extends REST_Controller{
             public function __construct() {
                    header('Access-Control-Allow-Origin: *');
                    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
                    parent::__construct();
                    $this->load->model('CouponModel');
                    $this->load->library('session');
                    $this->load->helper(array('form', 'url'));
             }    

             public function getCoupon_get(){
                $couponeData = $this->uri->segment(3);
                 $r = $this->CouponModel->getCoupon($couponeData);
                 $this->response($r); 
             }

          
      }