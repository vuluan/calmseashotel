<?php
class Room_manages_model extends CI_Model {
	private $module = 'room_manages';
	private $table 	= 'tbl_accommodations';
	private $table_link = 'tbl_links';
	private $table_promotions = 'tbl_promotions';
	function getsearchContent($limit,$page){
		$this->db->select('*');
		$this->db->limit($limit,$page);
		$this->db->order_by('delete','ASC');
		$this->db->order_by($this->input->post('func_order_by'),$this->input->post('order_by'));
		if($this->input->post('title')!=''){
			$this->db->where('(`name_vn` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('dateFrom')!='' && $this->input->post('dateTo')==''){
			$this->db->where('created >= "'.date('Y-m-d 00:00:00',strtotime($this->input->post('dateFrom'))).'"');
		}
		if($this->input->post('dateFrom')=='' && $this->input->post('dateTo')!=''){
			$this->db->where('created <= "'.date('Y-m-d 23:59:59',strtotime($this->input->post('dateTo'))).'"');
		}
		if($this->input->post('dateFrom')!='' && $this->input->post('dateTo')!=''){
			$this->db->where('created >= "'.date('Y-m-d 00:00:00',strtotime($this->input->post('dateFrom'))).'"');
			$this->db->where('created <= "'.date('Y-m-d 23:59:59',strtotime($this->input->post('dateTo'))).'"');
		}
		if($this->input->post('status') != 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function getTotalsearchContent(){
		$this->db->select('*');
		if($this->input->post('title')!=''){
			$this->db->where('(`name_vn` LIKE "%'.$this->input->post('title').'%")');
		}
		if($this->input->post('dateFrom')!='' && $this->input->post('dateTo')==''){
			$this->db->where('created >= "'.date('Y-m-d 00:00:00',strtotime($this->input->post('dateFrom'))).'"');
		}
		if($this->input->post('dateFrom')=='' && $this->input->post('dateTo')!=''){
			$this->db->where('created <= "'.date('Y-m-d 23:59:59',strtotime($this->input->post('dateTo'))).'"');
		}
		if($this->input->post('dateFrom')!='' && $this->input->post('dateTo')!=''){
			$this->db->where('created >= "'.date('Y-m-d 00:00:00',strtotime($this->input->post('dateFrom'))).'"');
			$this->db->where('created <= "'.date('Y-m-d 23:59:59',strtotime($this->input->post('dateTo'))).'"');
		}
		if($this->input->post('status') != 2){
			$this->db->where('status', $this->input->post('status'));
		}
		if($this->input->post('showData') != 2) {
			$this->db->where('delete', $this->input->post('showData'));
		}
		$this->db->from(PREFIX.$this->table);
		$query = $this->db->count_all_results();

		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}
	
	function getDetailManagement($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDetailManagementBySlug($slug){
		$this->db->select('*');
		$this->db->where('slug',$slug);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function saveManagement($fileName=''){
		if($this->input->post('hiddenIdAdmincp')==0){
			//Kiểm tra đã tồn tại chưa?
			$checkData = $this->checkData($this->input->post('nameAdmincp'));
			if($checkData){
				print 'error-title-exists.'.$this->security->get_csrf_hash();
				exit;
			}

			$checkSlug = $this->checkSlug($this->input->post('slugAdmincp'));
			if($checkSlug){
				print 'error-slug-exists.'.$this->security->get_csrf_hash();
				exit;
			}

			$data = array(
				'name_vn'=> trim($this->input->post('nameAdmincp', true)),
				'name_en'=> trim($this->input->post('name_enAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'images'=> trim($fileName['image']),
				'description_vn'=> trim($this->input->post('contentAdmincp')),
				'description_en'=> trim($this->input->post('content_enAdmincp')),
				'size'=> $this->input->post('sizeAdmincp'),
				'bedding'=> $this->input->post('beddingAdmincp'),
				'view'=> $this->input->post('viewAdmincp'),
				'occupancyAdult'=> $this->input->post('occupancyAdultAdmincp'),
				'occupancyChild'=> $this->input->post('occupancyChildAdmincp'),
				'price'=> $this->input->post('priceAdmincp'),
				'amount'=> $this->input->post('amountAdmincp'),
				'status'=> $this->input->post('statusAdmincp'),
				'created'=> date('Y-m-d H:i:s',time()),
			);
			if($this->db->insert(PREFIX.$this->table,$data)){
				modules::run('admincp/saveLog',$this->module,$this->db->insert_id(),'Add new','Add new');
				return true;
			}
		}else{
			$result = $this->getDetailManagement($this->input->post('hiddenIdAdmincp'));

			//Xử lý xóa hình khi update thay đổi hình
			if($fileName['image']==''){
				$fileName['image'] = $result[0]->images;
			}else{
				@unlink(BASEFOLDER.DIR_UPLOAD_ROOMS.$result[0]->images);
			}

			//Kiểm tra đã tồn tại chưa?
			if($result[0]->name_vn!=$this->input->post('nameAdmincp')){
				$checkData = $this->checkData($this->input->post('nameAdmincp'),$this->input->post('hiddenIdAdmincp'));
				if($checkData){
					print 'error-title-exists.'.$this->security->get_csrf_hash();
					exit;
				}
			}

			if($result[0]->slug!=$this->input->post('slugAdmincp')){
				$checkSlug = $this->checkSlug($this->input->post('slugAdmincp'),$this->input->post('hiddenIdAdmincp'));
				if($checkSlug){
					print 'error-slug-exists.'.$this->security->get_csrf_hash();
					exit;
				}
			}
			
			$data = array(
				'name_vn'=> trim($this->input->post('nameAdmincp', true)),
				'name_en'=> trim($this->input->post('name_enAdmincp', true)),
				'slug'=> trim($this->input->post('slugAdmincp', true)),
				'images'=> trim($fileName['image']),
				'description_vn'=> trim($this->input->post('contentAdmincp')),
				'description_en'=> trim($this->input->post('content_enAdmincp')),
				'size'=> $this->input->post('sizeAdmincp'),
				'bedding'=> $this->input->post('beddingAdmincp'),
				'view'=> $this->input->post('viewAdmincp'),
				'occupancyAdult'=> $this->input->post('occupancyAdultAdmincp'),
				'occupancyChild'=> $this->input->post('occupancyChildAdmincp'),
				'price'=> $this->input->post('priceAdmincp'),
				'amount'=> $this->input->post('amountAdmincp'),
				'status'=> $this->input->post('statusAdmincp')
			);
			modules::run('admincp/saveLog',$this->module,$this->input->post('hiddenIdAdmincp'),'','Update',$result,$data);
			$this->db->where('id',$this->input->post('hiddenIdAdmincp'));
			if($this->db->update(PREFIX.$this->table,$data)){
				return true;
			}
		}
		return false;
	}

	function checkSlug($slug,$id=0){
		$this->db->select('id');
		$this->db->where('slug',$slug);
		if($id!=0){
			$this->db->where_not_in('id',array($id));
		}
		$this->db->limit(1);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return true;
		}else{
			return false;
		}
	}
	
	function checkData($name,$id=0){
		$this->db->select('id');
		$this->db->where('name_vn',$name);
		if($id!=0){
			$this->db->where_not_in('id',array($id));
		}
		$this->db->limit(1);
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return true;
		}else{
			return false;
		}
	}

	
	/*----------------------FRONTEND----------------------*/
	function getData(){
		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}

	}

	function getDetailData($link){
		$arr = explode("/", $link);
        $n= count($arr) - 1;
        $slug = $arr[$n];

		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('slug',$slug);
		$this->db->from(PREFIX.$this->table);
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getImageslData($link){
		$arr = explode("/", $link);
        $n= count($arr) - 1;
        $slug = $arr[$n];

		$this->db->select('n.*');
		$this->db->where('c.status',1);
		$this->db->where('n.linkType','func_room');
		$this->db->where('c.slug',$slug);
		$this->db->order_by('created','DESC');
		$this->db->from(PREFIX.$this->table_link." n");
		$this->db->join(PREFIX.$this->table." c", 'c.id = n.objId', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getOffersData($link){
		$arr = explode("/", $link);
        $n= count($arr) - 1;
        $slug = $arr[$n];

		$this->db->select('c.*,n.price');
		$this->db->where('c.status',1);
		$this->db->where('n.slug',$slug);
		$this->db->order_by('n.created','DESC');
		$this->db->from(PREFIX.$this->table." n");
		$this->db->join(PREFIX.$this->table_promotions." c", 'n.id = c.accommodationId', "left");
		$query = $this->db->get();

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDifferentData($link){
		$arr = explode("/", $link);
        $n= count($arr) - 1;
        $slug = $arr[$n];

		$this->db->select('*');
		$this->db->where('status',1);
		$this->db->where('slug !=',$slug);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);
		if($query->result()){
			return $query->result();
		}else{
			return false;
		}

	}

	function getDataHighlight($amount){
		$this->db->select('*');
		$this->db->limit($amount);
		$this->db->where('status',1);
		$this->db->where('highlight',1);
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataHighlightDetail($id, $amount){
		$this->db->select('*');
		$this->db->limit($amount);
		$this->db->where('status',1);
		$this->db->where('highlight',1);
		$this->db->where_not_in('id',array($id));
		$this->db->order_by('created','DESC');
		$query = $this->db->get(PREFIX.$this->table);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getCateDel(){
		$this->db->select('id');
		$this->db->where('delete', 1);
		$query = $this->db->get(PREFIX.$this->table_category);

		if($query->result()){
			return $query->result();
		}else{
			return false;
		}
	}
	function getDataAll(){
		$this->db->select('1');
		$query = $this->db->count_all_results(PREFIX.$this->table);

		if($query>0){
			return $query;
		}
		else{
			return 0;
		}
	}
	function getDataPublish(){
		$this->db->select('1');
		$this->db->where('delete',0);
		$query = $this->db->count_all_results(PREFIX.$this->table);

		if($query>0){
			return $query;
		}
		else{
			return 0;
		}
	}
	/*--------------------END FRONTEND--------------------*/
}