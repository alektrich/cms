<?php

class Admin_Controller extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'CMS';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_m');
	}
}