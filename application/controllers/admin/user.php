<?php
class User extends Admin_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function login() {
		
		// Redirect a user if he's already logged in
		$dashboard = 'admin/dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);
		
		// Set form
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->user_m->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				redirect('admin/user/login', 'refresh');
			}
		}
		
		// Load view
		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_model', $this->data);
	}
}