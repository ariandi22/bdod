<?php 

class M_asking extends CI_Model {

	var $db;
	var $table = "ask";

	public function __construct() {
		parent::__construct();
		$this->db = $this->load->database('default',TRUE);
	}

	public function index() {
		$this->db->cache_on();
		$this->db->select('*');    
		$this->db->from('ask');
		$this->db->join('users', 'ask.id_asking = users.id_user');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function hitung_pertanyaan() {
		$this->db->select('*')
				 ->from('ask');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function getAsk($where=array()) {
		$this->db->cache_on();
		$query = $this->db->select('*')
				 ->from('ask')
				 ->join('users', 'users.id_user=ask.id_user')
				 ->where($where)
				 ->get();
		$query = $query->result_array();

		if($query){
			return $query[0];
		}
	}

	public function getAns($where=array()) {
		$this->db->cache_on();
		$query = $this->db->select('*')
				 ->from('answers')
				 ->join('users', 'users.id_user=answers.id_user')
				 ->where($where)
				 ->get();
		return $query->result_array();
	}

	public function icomments() {
		$this->db->cache_delete_all();
		$this->db->select('*')
				 ->from('comments')
				 ->join('users', 'users.id_user=comments.id_user')
				 ->order_by('created_at', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getComByAsking($where=array()) {
		$this->db->cache_on();
		$query = $this->db->select('*')
				 ->from('comments')
				 ->join('users', 'users.id_user=comments.id_user')
				 ->where($where)
				 ->order_by('created_at', 'asc')
				 ->get();
		return $query->result_array();
	}

	public function getComByAnswers($where=array()) {
		$query = $this->db->select('*')
				 ->from('comments')
				 ->join('users', 'users.id_user=comments.id_user')
				 ->where($where)
				 ->order_by('created_at', 'asc')
				 ->get();
		return $query->result_array();
	}

}

?>