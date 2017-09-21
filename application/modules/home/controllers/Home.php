<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	function __construct(){
		parent::__construct();
	}
	
	/*------------------------------------ FRONTEND ------------------------------------*/
	public function index(){
		$this->load->model('Static_pages/Static_pages_model');
		$data['result'] = $this->Static_pages_model->getData('content-builder');
		$this->template->write_view('content','index', $data);
		$this->template->render();
	}

	public function contact(){
		// get banners
		$this->template->write('title','Căn Hộ Đầu tiên');
		$this->template->write('meta_keywords','Căn Hộ Đầu tiên');
		$this->template->write('meta_description','Căn Hộ Đầu tiên');
		$this->template->write('meta_url', PATH_URL);
		$this->template->write_view('content','contact');
		$this->template->render();
	}

	public function content_snippets(){
		$this->load->view("snippets");
	}

	public function content_builder(){
		$this->load->model('Static_pages/Static_pages_model');
		$data['result'] = $this->Static_pages_model->getData('content-builder');
		$this->template->write_view('content','content_builder', $data);
		$this->template->render();
	}
	/*------------------------------------ End FRONTEND --------------------------------*/
}