<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Welcome';
		$this -> load -> view('index', $data);
	}//End of index method

	public function home() {
		$data['title'] = 'Home';
		$this -> load -> view('home', $data);
	}//End of home method

	public function introduction() {
		$data['title'] = 'Introduction';
		$this -> load -> view('introduction', $data);
	}//End of introduction method

	public function care_young_infant() {
		$data['title'] = 'Care of Young Infant';
		$this -> load -> view('care_young_infant', $data);
	}//End of care_young method
	
	public function care_child() {
		$data['title'] = 'Care of Child';
		$this -> load -> view('care_child', $data);
	}//End of care_child method
	
	public function identify_treatment() {
		$data['title'] = 'Identify Treatment';
		$this -> load -> view('identify_treatment', $data);
	}//End of care_child method

}
?>