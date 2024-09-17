<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	private $table_accommodationprice 	= 'tbl_accommodationprice';
	private $table_accommodations 		= 'tbl_accommodations';
	private $table_booking				= 'tbl_booking';
	private $table_promotions 			= 'tbl_promotions';
	private $table_services 			= 'tbl_services';

	function getRoomsData(){

        $room = $_POST["accommodation"];
        $adult = $_POST["adults"];
        $child = $_POST["children"];
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('(`id` LIKE "%'.$room.'%")');
		$this->db->where('occupancyAdult >=',$adult);
		$this->db->where('occupancyChild >=',$child);
		$this->db->from(PREFIX.$this->table_accommodations);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getOffersData(){

		$checkindate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		$checkoutdate = date("Y-m-d 00:00:00", strtotime($this->input->post("departure")));
		$first_date = strtotime($checkindate);
		$second_date = strtotime($checkoutdate);
		$datediff = abs($first_date - $second_date);
		$totalday= ($datediff / (60*60*24));
		// var_dump($totalday); exit();
		
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('condition',$totalday);
		$this->db->order_by('discount','DESC');
		$this->db->from(PREFIX.$this->table_promotions);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getHolidayPriceData(){

		// $startdate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		// $enddate = date("Y-m-d 23:59:59", strtotime($this->input->post("departure")));
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->from(PREFIX.$this->table_accommodationprice);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function checkHoliday($date){

		// $startdate =  date("Y-m-d 00:00:00", strtotime($this->input->post("arrive")));
		// $enddate = date("Y-m-d 23:59:59", strtotime($this->input->post("departure")));
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('date',$date);
		$this->db->from(PREFIX.$this->table_accommodationprice);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getOffersDetailWithId($id){
		$this->db->select('n.*,c.price,c.name_en as roomname_en, c.name_vn as roomname_vn');
		$this->db->where('n.status',1);
		$this->db->where('n.id',$id);
		$this->db->order_by('n.created','DESC');
		$this->db->from(PREFIX.$this->table_promotions." n");
		$this->db->join(PREFIX.$this->table_accommodations." c", 'c.id = n.accommodationId', "left");
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getRoomsDataWithId($id){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('id',$id);
		$this->db->from(PREFIX.$this->table_accommodations);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getServiceData(){;
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->order_by('price','DESC');
		$this->db->from(PREFIX.$this->table_services);
		$query = $this->db->get();
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

}
?>