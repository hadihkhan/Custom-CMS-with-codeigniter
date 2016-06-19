<?php
class Dashboard extends Admin_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function model() {
		$this->load->view('admin/_layout_model', $this->data);
	}
}