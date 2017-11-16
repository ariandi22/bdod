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

	public function icomments() {
		$this->db->cache_on();
		$this->db->select('*')
				 ->from('comments')
				 ->join('users', 'users.id_user=comments.id_user');
		$query = $this->db->get();
		return $query->result_array();
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

	public function getAnswers($where=array()){

		$query = $this->db->get_where('answers',$where);
		return $query->result_array();
	}

}

?>