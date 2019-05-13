<?php
class Restaurant_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function get_all_data(){
		$res=array();
		$query=$this->db->get('restaurant_list');
		if($query->num_rows()>0){

			$res=$query->result_array();
		}else{
			$res['bool']=false;
		}
		return $res;
	}
	function post(){
		        //this array is used to get fetch data from the view page.  
			$data = array(  
			'name'=> $this->input->post('name'),  
			'reslocation'=> $this->input->post('reslocation'),  
			'content'=> $this->input->post('content')  
		
					);  
	//insert data into database table.  
	$this->db->insert('restaurant_list',$data);  

	}
}
?>