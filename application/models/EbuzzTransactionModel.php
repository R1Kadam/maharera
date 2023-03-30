<?php
class EbuzzTransactionModel extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_counter(){
		$query = $this->db->get('event_registrations');
		return $query->result_array();
	}

	public function new_event_registration($event_ID,$mobile,$amount){
		$evenReg = "EVENTREG".date("Ymdhis");
		$data = array(
			'event_registration_id' =>  $evenReg,
			'course_id' => $event_ID,
			'mobile' => $mobile,
			'is_paid' => 1,
			'paid_amount' => $amount,
		   );
		$insertData = $this->db->insert('event_registrations', $data);
		return $insertData;

	}

	public function get_event_details($event_id){
		$this->db->select("*");
		$this->db->from("events");
		$this->db->where("events.id", $event_id);
		$query = $this->db->get();
		if($query){
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function get_user_details($phone,$eventID){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("users.mobile", $phone);
		$this->db->where("users.course_id", $eventID);
		$query = $this->db->get();
		if($query){
			$a =$query->result_array();
			return $a;
		}else{
			return false;
		}
	}

}















?>