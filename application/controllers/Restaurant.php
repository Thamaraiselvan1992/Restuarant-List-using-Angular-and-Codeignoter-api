
<?php
class Restaurant extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Restaurant_Model');
	}
 
	function index(){
		$this->load->view('Restaurant/index');
	}
 
	function get_posts(){
		echo json_encode($this->Restaurant_Model->get_all_data());
	}
	function post_posts(){
		$_POST = json_decode(file_get_contents('php://input'), true);
	
		echo json_encode($_POST=$this->Restaurant_Model->post());
	}
}
?>