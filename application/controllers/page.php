<?php

class Page extends Frontend_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('page_m');
	}

	public function index() {

		$this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
		count($this->data['page']) || show_404(current_url());
		$this->load->view('_main_layout', $this->data);
	}

	/*public function save() {
		$data = array(
			'order' => '3',
		);
		$id = $this->page_m->save($data, 3);
		var_dump($id);
	}

	public function delete() {
		$this->page_m->delete(3);
	}*/
}