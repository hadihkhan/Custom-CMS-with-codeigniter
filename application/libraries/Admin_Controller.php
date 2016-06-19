<?php
class Admin_Controller extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'My Awesome CMS';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');
		

	}
}