<?php

class Admin_Controller extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->data['meta_title'] = 'Moj opaki CMS';
	}
}