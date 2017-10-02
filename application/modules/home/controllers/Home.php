<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('language');
		$this->lang->load('general');
	}
	
	/*------------------------------------ FRONTEND ------------------------------------*/
	public function index(){
		$this->template->write('title','Calm Seas Hotel');
		$this->template->write_view('content','index');
		$this->template->render();
	}

	public function contact(){
		$this->template->write('title','Liên hệ Khách sạn calm seas');
		$this->template->write_view('content','contact');
		$this->template->render();
	}
	public function about(){
		$this->template->write('title','Giới thiệu Khách sạn calm seas');
		$this->template->write_view('content','about');
		$this->template->render();
	}
	public function news(){
		$this->template->write('title','Tin tức Khách sạn calm seas');
		$this->template->write_view('content','news');
		$this->template->render();
	}
	public function news_detail(){
		$this->template->write('title','Tin tức Khách sạn calm seas');
		$this->template->write_view('content','news-detail');
		$this->template->render();
	}
	public function room_detail(){
		$this->template->write('title','Hạng Phòng Khách sạn calm seas');
		$this->template->write_view('content','room-detail');
		$this->template->render();
	}
	public function restaurant(){
		$this->template->write('title','Hạng Phòng Khách sạn calm seas');
		$this->template->write_view('content','restaurant');
		$this->template->render();
	}
	public function restaurant1(){
		$this->template->write('title','Hạng Phòng Khách sạn calm seas');
		$this->template->write_view('content','restaurant1');
		$this->template->render();
	}

	public function offers(){
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','offers');
		$this->template->render();
	}

	public function offers_detail(){
		$this->template->write('title','Chi tiếp ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','offers-detail');
		$this->template->render();
	}

	public function booking_step_1(){
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-1');
		$this->template->render();
	}
	public function booking_step_2(){
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-2');
		$this->template->render();
	}
	public function booking_step_3(){
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-3');
		$this->template->render();
	}
	public function booking_step_4(){
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-4');
		$this->template->render();
	}
	/*------------------------------------ End FRONTEND --------------------------------*/
}