<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_asking');
		$this->load->helper(array('string','text'));
	}


	public function index() {
		
		$data['asking'] = $this->m_asking->index();
		$data['content'] = 'welcome_message';
		$this->load->view('frontend/header' , $data);
	}

	public function getDetails($id) {

		$data['ask'] = $this->m_asking->getAsk(array('ask.id_asking' => $id));
		$data['comments'] = $this->m_asking->iComments();
		$data['answers'] = $this->m_asking->getAns(array('answers.id_answer_to' => $id));
		$data['countans'] = $this->m_asking->countAnswers(array('id_answer_to' => $id));

		$data['content'] = 'asking/index';
		$this->load->view('frontend/header', $data);
	}
}
