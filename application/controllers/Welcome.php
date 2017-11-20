<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_asking');
		$this->load->helper(array('string','text','file'));
		$this->load->library('markdown');
	}


	public function index() {
		$data['jumlah_pertanyaan'] = $this->m_asking->hitung_pertanyaan();
		$data['asking'] = $this->m_asking->index();
		$data['content'] = 'welcome_message';
		$this->load->view('frontend/header' , $data);
	}

	public function getDetails($id) {
		$data['jumlah_pertanyaan'] = $this->m_asking->hitung_pertanyaan();
		$data['ask'] = $this->m_asking->getAsk(array('ask.id_asking' => $id)); // get asking by given id
		$data['answers'] = $this->m_asking->getAns(array('answers.id_answer_to' => $id)); // get answers related by asking
		$data['comments'] = $this->m_asking->iComments(); // get all comment

		$data['com_ask'] = $this->m_asking->getComByasking(array('comments.id_com_to_ask' => $id));

		$data['com_ans'] = $this->m_asking->getComByanswers(array('comments.id_com_to_answer' => $id));

		$read = file_get_contents(base_url('resources').'/data-5a0fa260bdcab.md', true);
		$data['print'] = $this->markdown->parse($read);

		$data['content'] = 'asking/index';
		$this->load->view('frontend/header', $data);
	}

	public function getCommentbyasking() {
		$id = $this->input->post('idasking');
		$data = $this->m_asking->getComByasking('id_com_to_ask',$id);
	}

	public function writeMd() {
		$uid = uniqid();
		$data = $this->input->post('asking');
		if (isset($data)) {
			$lokasi = './resources/data-'.$uid.'.md';
			write_file($lokasi, $data);
			 echo $lokasi;
		}

		else {
		     echo 'Failed to write file!';
		}
	}

}
