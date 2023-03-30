<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('crud');
		$this->load->library('blog');
		$this->lang->load('information', 'english');
	}
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['page'] = 'home';
		$data['title'] = 'MahaRERA Real Estate Agent Certification Program';
		$this->load->view('website/index', $data);
		$this->lang->load('information', 'english');
	}

	public function course()
	{
		$data['page'] = 'course';
		$data['title'] = 'Course';
		$this->load->view('website/index', $data);
	}

	public function classroom_course()
	{
		$data['page'] = 'classroom_course';
		$data['title'] = 'Classroom Course';
		$this->load->view('website/index', $data);
	}

	public function landrevenue()
	{
		$data['page'] = 'land_and_revenue';
		$data['title'] = 'Land & revenue Course';
		$this->load->view('website/index', $data);
	}
	public function job_oriented_training()
	{
		$data['page'] = 'job_oriented_training';
		$data['title'] = 'Job Oriented Training';
		$this->load->view('website/index', $data);
	}
	public function new_course()
	{
		$data['page'] = 'new_course';
		$data['title'] = 'MahaRERA Real Estate Agent Certification Program';
		$this->load->view('website/index', $data);
	}
	public function blog_list()
	{
		$data['page'] = 'blog_list';
		$data['title'] = 'Blogs';
		$this->load->view('website/index', $data);
	}
	public function blog()
	{
		$blogID = $_GET['id'];
		$blogData = $this->blog->getBlogFromId($blogID);

		$data['page'] = 'blog';
		$data['title'] = $blogData[0]['title'];
		$this->load->view('website/index', $data);
	}

	public function about_us()
	{
		$data['page'] = 'about_us';
		$data['title'] = 'About us';
		$this->load->view('website/index', $data);
	}

	public function webinar()
	{
		$data['page'] = 'register';
		$data['title'] = 'Webinar';
		$this->load->view('website/index', $data);
	}

	public function gallery()
	{
		$data['page'] = 'gallery';
		$data['title'] = 'Gallery';
		$this->load->view('website/index', $data);
	}

	public function contact()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['page']    = 'contact';
		$data['title'] = 'Contact';
		$this->load->view('website/index', $data);
	}
	public function users()
	{
		$this->load->library('session');
		$data['success'] = $this->session->flashdata('success');
		$data['error']   = $this->session->flashdata('error');
		$data['course_id'] = $this->input->post('course_id');
		$data['sub_course_id'] = $this->input->post('sub_course_id');
		$data['sub_course_name'] = $this->input->post('sub_course_name');
		$data['course_name'] = $this->input->post('course_name');
		$data['course_price'] = $this->input->post('course_price');

		$data['course_date'] = $this->input->post('course_date');
		$data['batch_hours'] = $this->input->post('batch_hours');
		$data['batch_time'] = $this->input->post('batch_time');
		$data['page'] = 'users';
		$data['title'] = 'Users';

		$this->load->view('website/index', $data);
	}

	public function query()
	{
		$this->load->library('contact');
		$saveArray = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'phone' 	=> $this->input->post('phone'),
			'message' 	=> $this->input->post('message')
		);

		// save into database

		$save  = $this->contact->saveQuery($saveArray);

		if ($save) {
			$this->session->set_flashdata('success', 'Thankyou ' . $this->input->post('name') . '. We receive your request. We will connect you soon.');
		} else {
			$this->session->set_flashdata('errro', 'Oops Something went wrong. Please Try after some time.');
		}

		redirect('web/contact');
	}

	public function webinar_submit()
	{
		$this->load->library('contact');
		$saveArray = array(
			'first_name' 		=> $this->input->post('f_name'),
			'last_name' 		=> $this->input->post('l_name'),
			'age' 	=> $this->input->post('age'),
			'email' 	=> $this->input->post('email'),
			'mobile' 	=> $this->input->post('mobile'),
			'city' 	=> $this->input->post('city'),
			'district' 	=> $this->input->post('district'),
			'question1' 	=> $this->input->post('broker'),
			'question2' 	=> $this->input->post('registeredMaharera'),
		);

		// save into database

		$save  = $this->contact->saveWebinarData($saveArray);

		// if($save){
		// 	$this->session->set_flashdata('success','Thankyou '.$this->input->post('f_name').'. We receive your request. We will connect you soon.');
		// }else{
		// 	$this->session->set_flashdata('errro','Oops Something went wrong. Please Try after some time.');
		// }

		redirect('web/thank_you');
	}
	public function enquiry()
	{
		$this->load->library('contact');
		$saveArray = array(
			'fullname' 		=> $this->input->post('fullname'),
			'email' 	=> $this->input->post('email'),
			'mobile' 	=> $this->input->post('mobile'),
			'city' 	=> $this->input->post('cities')
		);
		// save into database
		$save  = $this->contact->saveEnquiry($saveArray);
		if ($save) {
			$this->session->set_flashdata('success', 'Thankyou ' . $this->input->post('name') . '. We receive your request. We will connect you soon.');
			redirect('/');
		} else {
			$this->session->set_flashdata('errro', 'Oops Something went wrong. Please Try after some time.');
			redirect('/');
		}
	}


	public function checkout()
	{
		$this->load->library('contact');
		$this->load->library('session');
        $refPrefix = "SIMRERA";
       
		$saveArray = array(
			'first_name' => $this->input->post('f_name'),
			'last_name' => $this->input->post('l_name'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'address_line1' => $this->input->post('address1'),
			'address_line2' => $this->input->post('address2'),
			'city' => $this->input->post('city'),
			'state' => "MH",
			'pincode' => $this->input->post('pincode'),
			'birth_date' => $this->input->post('dob'),
			
			'refcode' =>$refPrefix . $this->input->post('refcode'),
			
			// 'course_id' => $this->input->post('course_id'),
			// 'sub_course_id' => $this->input->post('sub_course_id'),
			// 'sub_course_name' => $this->input->post('sub_course_name'),
			// 'course_name' => $this->input->post('course_name'),
			// 'course_price' => $this->input->post('course_price'),
		);
		// var_dump($saveArray);
		//save user data in to database
		$save  = $this->contact->saveUserData($saveArray);

		$saveBatchArray = array(
			'batch' => $this->input->post('batch'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
		);
		$this->session->set_userdata('batch', $this->input->post('batch'));

		$savebatch  = $this->contact->saveUserBatchDataBase($saveBatchArray);
		$urls = base_url();
		$data['surl'] = $urls . 'easebuzz_pay/success';;
		$data['furl'] = $urls . 'easebuzz_pay/failed';;
		$data['course_id'] = $this->input->post('course_id')?$this->input->post('course_id'):1;
		$data['sub_course_id'] = $this->input->post('sub_course_id')?$this->input->post('sub_course_id'):1;
		$data['sub_course_name'] = $this->input->post('sub_course_name');
		$data['course_name'] = $this->input->post('course_name');
		$data['course_price'] = $this->input->post('course_price')? $this->input->post('course_price'):500;
		$data['f_name'] = $this->input->post('f_name');
		$data['l_name'] = $this->input->post('l_name');
		$data['mobile'] = $this->input->post('mobile');
		$data['email'] = $this->input->post('email');
		$data['batch'] = $this->input->post('batch');
		$data['address1'] = $this->input->post('address1');
		$data['address2'] = $this->input->post('address2');
		$data['city_name'] = $this->input->post('city');
		$data['pincode'] = $this->input->post('pincode');
		
        $data['refcode'] = $this->input->post('refcode');
        
		$data['course_date'] = $this->input->post('course_date');
		$data['batch_hours'] = $this->input->post('batch_hours');
		$data['batch_time'] = $this->input->post('batch_time');

		$data['page'] = 'checkout';
		$data['title'] = 'Checkout';
		$this->load->view('website/index', $data);
	}

	public function thanks()
	{
		$data['page'] = 'thanks';
		$data['title'] = 'Thanks';
		$this->load->view('website/index', $data);
	}

	public function thank_you()
	{
		$data['page'] = 'thank_you';
		$data['title'] = 'Thanks';
		$this->load->view('website/index', $data);
	}

	public function checkCouponData()
	{
		$this->load->library('crud');

		$phone    = $this->input->post('phone');
		$coupon   = $this->input->post('coupon');
		$amt      = $this->input->post('amt');
		$discount = '';
		$gst = $grandTotal = '';
		// checking coupon is availabe or not 
		$availCoupon = $this->crud->getAvailCouponData($coupon);

		if ($availCoupon) {
			// check Already applied or not
			$AlreadyApplied = $this->crud->checkForAppliedOrNot($phone, $availCoupon[0]['couponId']);
			if (empty($AlreadyApplied)) {
				// get coupon varivales for calulations
				$couponType  = $availCoupon[0]['couponType'];
				$couponvalue = $availCoupon[0]['couponvalue'];
				// if deduction is in persent
				if ($couponType == '2') {
					$deductionValue  = (($amt * $couponvalue) / 100);
					$value           = number_format((float)($amt - $deductionValue), 2, '.', '');
					$exactValue      = '₹ ' . number_format((float)$value, 2, '.', '');
					$discount        = number_format((float)$couponvalue, 2, '.', '') . " &#x00025;";
					$gst1            = number_format((float)(($value * 9) / 100), 2, '.', '');
					$gst             = $gst1;
					$grandTotal      = number_format((float)(($value + $gst) + $gst), 2, '.', '');
				} else {
					$value      = ($amt - $couponvalue);
					$exactValue = '₹ ' . number_format((float)$value, 2, '.', '');
					$discount   = '₹ ' . number_format((float)$couponvalue, 2, '.', '');
					$gst1       = number_format((float)(($value * 9) / 100), 2, '.', '');
					$gst        = $gst1;
					$grandTotal = number_format((float)(($value + $gst) + $gst), 2, '.', '');
				}

				//die();
				$saveArr = array('couponID' => $availCoupon[0]['couponId'], 'phone' => $phone);
				// save to applied coupon table
				$apply = $this->crud->applyCouponNew($saveArr);
				// $apply = true;
				if ($apply) {
					$array = array('discount' => $discount, 'offerRate' => $exactValue, 'cgst' => $gst, 'sgst' => $gst, 'totalAmt' => $grandTotal);
					$response = array('status' => '1', 'msg' => 'Success! Coupon Applied.', 'data' => $array);
				} else {
					$response = array('status' => '0', 'msg' => 'Server Busy. Please try later.','data'=>$saveArr);
				}
			} else {
				$response = array('status' => '0', 'msg' => 'You Already Applied this Coupon. Please Try Another.');
			}
		} else {
			$response = array('status' => '0', 'msg' => 'coupon not available or expired');
		}

		echo json_encode($response);
	}
}
