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
		$this->load->model('home/Home_model','home');
		$this->load->library('session');
		
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


	public function booking($link){
		//teamplate
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data['postdata'] = array(
			'checkindate' =>  $this->input->get('checkindate'),
			'checkoutdate' => $this->input->get('checkoutdate'),
			'adult' =>  $this->input->get('adult'),
			'children' => $this->input->get('children'),
			'accommodation' =>  $this->input->get('accommodation')
		);
		$this->template->write('title','Chi tiếp ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking',$data);
		$this->template->render();
	}
	public function ajaxSearchBooking()
    {
        $data["searchRooms"]= $this->home->getRoomsData();
		//kiem tra offers
		$HolidayPriceData= $this->home->getHolidayPriceData();
		$checkindate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		$checkoutdate = date("Y-m-d 00:00:00", strtotime($this->input->post("departure")));

		foreach ($HolidayPriceData as $key => $V) {
			if ($V->date >= $checkindate  &&   $V->date <= $checkoutdate) {
				break;
			}else{
				$data["searchOffers"]= $this->home->getOffersData();
			}
		}
        $this->load->view("ajaxSearchBooking",$data);
    }
    public function ajaxViewDateRateDetail()
    {	//input
    	$this->session->unset_userdata('SES_BOOKING');
		$id = $_POST["id"];
		$totaladults = $this->input->post("adults");
		$totalchildren = $this->input->post("children");
		$totalRoom = $this->input->post("totalRoom");
		//format date
		$checkindate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		$checkoutdate = date("Y-m-d 00:00:00", strtotime($this->input->post("departure")));
		$first_date = strtotime($checkindate);
		$second_date = strtotime($checkoutdate);
		$datediff = abs($first_date - $second_date);
		$totalday= ($datediff / (60*60*24));// total day

		$resultOffers= $this->home->getOffersDetailWithId($id);
		$totalPrice = 0;
		for ($i=0; $i < $totalday; $i++) {
			$date = date('Y-m-d', strtotime('+'.$i. 'day', strtotime($checkindate)));
			$priceperday = $resultOffers[0]->price*((100-$resultOffers[0]->discount)/100); 
			$totalPrice = $totalPrice + $priceperday;
			$listPriceOfDate[] = array(
				'date' => 	$date,
				'price'=>	$priceperday,
			);
		}

		if ($totaladults>2) {
			$priceAddAdults =($totaladults-2)*300000;
		}else{
			$priceAddAdults= 0;
		}
		if ($totalchildren>0) {
			$priceAddChild =($totalchildren-0)*(300000/2);
		}else{
			$priceAddChild= 0;
		}
		$totalAdd= $priceAddAdults + $priceAddChild;

		$booking_data = array(
	        'booking_type'  => 'offer', // mornal or offer
	        'checkindate' 	=> $checkindate,
	        'checkoutdate' 	=> $checkoutdate,
	        'totalRoom'		=> $totalRoom,
	        'totaladults'	=> $totaladults,
	        'totalchildren'	=> $totalchildren,
	        'PriceOfDate'	=> $listPriceOfDate,
	        'totalday'		=> $totalday,
	        'totalPrice'	=> $totalPrice,
	        'result'		=> $resultOffers[0],
	        'totalAdd'		=> $totalAdd
		);
		
		$this->session->set_userdata('SES_BOOKING', $booking_data);

		$data = array(
			'result'=>$resultOffers[0],
			'totalday'=>$totalday,
			'checkindate'=>$checkindate
		);
		$this->load->view("ajaxViewDateRateDetail",$data);
    }
    public function ajaxViewDateRateDetailForRoom()
    {	//input
    	$this->session->unset_userdata('SES_BOOKING');
		$id = $this->input->post("id");
		$totaladults = $this->input->post("adults");
		$totalchildren = $this->input->post("children");
		$totalRoom = $this->input->post("totalRoom");
		//format date
		$checkindate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		$checkoutdate = date("Y-m-d 00:00:00", strtotime($this->input->post("departure")));
		$first_date = strtotime($checkindate);
		$second_date = strtotime($checkoutdate);
		$datediff = abs($first_date - $second_date);
		$totalday= ($datediff / (60*60*24));//so ngay o
		// tinh total price
		$resultRoom= $this->home->getRoomsDataWithId($id);
		$totalPrice = 0;
		for ($i=0; $i < $totalday; $i++) {
			$date = date('Y-m-d', strtotime('+'.$i. 'day', strtotime($checkindate))); 
			$HolidayPriceData= $this->home->checkHoliday($date);
			$date1 = date('d-m-Y', strtotime($date));
			if ($HolidayPriceData != NULL || $HolidayPriceData != '') {
				$totalPrice = $totalPrice + ($resultRoom[0]->price + ($resultRoom[0]->price * ($HolidayPriceData[0]->pricepercent)/100));
				$listPriceOfDate[] = array(
					'date' => '<span style="color:red">'.$date1.'</span>',
					'price'=>$resultRoom[0]->price + ($resultRoom[0]->price * ($HolidayPriceData[0]->pricepercent)/100)
				);
			}else{
				$totalPrice = $totalPrice + ($resultRoom[0]->price);
				$listPriceOfDate[] = array(
					'date' => $date1,
					'price'=> $resultRoom[0]->price
				);
			}
		}
		//Check total person
		if ($totaladults>2) {
			$priceAddAdults =($totaladults-2)*300000;
		}else{
			$priceAddAdults= 0;
		}

		if ($totalchildren>0) {
			$priceAddChild =($totalchildren-0)*(300000/2);
		}else{
			$priceAddChild= 0;
		}
		$totalAdd= $priceAddAdults + $priceAddChild;

		$booking_data = array(
	        'booking_type'  => 'normal', // mornal or offer
	        'checkindate' 	=> $checkindate,
	        'checkoutdate' 	=> $checkoutdate,
	        'totalRoom'		=> $totalRoom,
	        'totaladults'	=> $totaladults,
	        'totalchildren'	=> $totalchildren,
	        'PriceOfDate'	=> $listPriceOfDate,
	        'totalday'		=> $totalday,
	        'totalPrice'	=> $totalPrice,
	        'result'		=> $resultRoom[0],
	        'totalAdd'		=> $totalAdd
		);

		$this->session->set_userdata('SES_BOOKING', $booking_data);

		$data = array(
			'PriceOfDate'=>$listPriceOfDate,		
			'result'=>$resultRoom[0],
			'totalday'=>$totalday,
			'checkindate'=>$checkindate,
		);
		$this->load->view("ajaxViewDateRateDetailForRoom",$data);
    }




	public function bookingOfferOftion(){

		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-2',$data);
		$this->template->render();
	}

	public function bookingOftion(){
		//
		$data["room"] = $this->room_manages->getData();
		$data["utility"] = $this->utilities->getData();
		//
		$data['session']=$this->session->userdata('SES_BOOKING');
		$data['dataService'] = $this->home->getServiceData();
		$this->template->write('title','Ưu đãi Khách sạn calm seas');
		$this->template->write_view('content','booking-step-2',$data);
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




	public function doBookingNormal() {
		$booking_data = array(
	        'booking_type'  => 'normal', // mornal or offer
	        'booking_price'     => array('2017/10/29' => 1000000, 
	        							'2017/10/30' => 1200000
	    	),
	    	'customer_name' => 'Nguyen Vu Luan',
	    	'customer_phone' => '093129837'
		);

		$this->session->set_userdata('SES_BOOKING', $newdata);
	}

	public function doBookingOffer() {
		$booking_data = array(
	        'booking_type'  => 'offer', // mornal or offer
	        'booking_price'     => array('2017/10/29' => 1000000, 
	        							'2017/10/30' => 1200000
	    	),
	    	'customer_name' => 'Nguyen Vu Luan',
	    	'customer_phone' => '093129837'
		);

		$this->session->set_userdata('SES_BOOKING', $newdata);
	}


	private function findNextDay($date) {
		return date('Y/m/d', strtotime('+1 day', strtotime($date)));
	}

	private function compareDate($date1, $date2) {
		return strtotime($date1) === strtotime($date2) ? true : false;
	}
	public function doBookingForRoom() {
		// get Room
		$startDate = "2017/11/03";
		$endDate = "2017/11/07";
		$adult = 2;
		$children = 1;
		$amount = 1;
		$totalPrice = 0;
		do {
			// dau tien query tat ca cac phong ra -> se co gia phong mac dinh
			$defaultPrice = 1000;
			// sau do query gia phong theo tung ngay (query gia phong ngay le == "2017/10/25" neu khong co thi ngay nay se lay gia phong mac dinh)
			// tiep tuc query gia phong ngay le == 2017/10/26 xem co du lieu khong neu khong se lay gia phong mac dinh
			// Query bang gia ngay le theo $startDate (startDate se tu dong thay doi trong vong lap)
			$increasePercel = 0;
			$actualyPrice = 1000;
			$totalPrice += $actualyPrice;
			// luu vo session
			
		    $startDate = $this->findNextDay($startDate);
		} while ( $this->compareDate($startDate, $this->findNextDay($endDate)));

		var_dump($totalPrice); exit();

	}
	/*------------------------------------ End FRONTEND --------------------------------*/

}