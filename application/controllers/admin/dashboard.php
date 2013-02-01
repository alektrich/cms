<?php

class Dashboard extends Admin_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('_layout_main', $this->data);
	}

	public function modal() {
		$this->load->view('_layout_modal', $this->data);
	}
}