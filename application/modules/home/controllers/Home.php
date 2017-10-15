<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('language');
		$this->lang->load('general');

		$this->load->model('utilities/Utilities_model','utilities');
		$this->load->model('news/News_model','news');
		$this->load->model('room_manages/Room_manages_model','room_manages');
		$this->load->model('banners/Banners_model','banners');
		$this->load->model('news/News_model','news');
		$this->load->model('comments/Comments_model','comments');
		$this->load->model('room_offers/Room_offers_model','room_offers');
		
	}
	
	/*------------------------------------ FRONTEND ------------------------------------*/
	public function index(){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//content
		$data["banner"] = $this->banners->getData();
		$data["ThreeNews"] = $this->news->getThreeDataLatest();
		$data["comments"] = $this->comments->getData();
		//
		$this->template->write('title','Calm Seas Hotel');
		$this->template->write_view('content','index', $data);
		$this->template->render();
	}

	public function contact(){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$this->template->write('title','Liên hệ Khách sạn calm seas');
		$this->template->write_view('content','contact', $data);
		$this->template->render();
	}
	public function about(){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$this->template->write('title','Giới thiệu Khách sạn calm seas');
		$this->template->write_view('content','about', $data);
		$this->template->render();
	}
	public function news(){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["news"] = $this->news->getData(10,0);
		$this->template->write('title','Tin tức Khách sạn calm seas');
		$this->template->write_view('content','news',$data);
		$this->template->render();
	}
	public function detailnews($link){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["detailNews"] = $this->news->getDetailData($link);
		$this->template->write('title','Tin tức Khách sạn calm seas');
		$this->template->write_view('content','news-detail',$data);
		$this->template->render();
	}
	public function room_detail($link){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["detailRooms"] = $this->room_manages->getDetailData($link);
		$data["imagesRooms"] = $this->room_manages->getImageslData($link);
		$data["offersRooms"] = $this->room_manages->getOffersData($link);
		$data["getDifferentRooms"] = $this->room_manages->getDifferentData($link);

		$this->template->write('title','Hạng Phòng Khách sạn calm seas');
		$this->template->write_view('content','room-detail',$data);
		$this->template->render();
	}

	public function restaurant($link){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["detailUtilities"] = $this->utilities->getDetailData($link);

		$this->template->write('title','Hạng Phòng Khách sạn calm seas');
		$this->template->write_view('content','restaurant',$data);
		$this->template->render();
	}

	public function offers(){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["offers"] = $this->room_offers->getData(10,0);

		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','offers',$data);
		$this->template->render();
	}

	public function offers_detail($link){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data["detailOffers"] = $this->room_offers->getDetailData($link);
		$data["FiveDifferentData"] = $this->room_offers->getDifferentData($link);
		$this->template->write('title','Chi tiếp ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','offers-detail',$data);
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