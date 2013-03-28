<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_Model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();	
	}
	
	public function index()
	{
		//$this->load->view('main');
		// Provide view with list of functional reports
	}

	public function getAllStaff()
	{
		$q = $this->db->get('tblStaff');
		
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			
			return $data;
		}
	}

	public function getAllStudents()
	{
		$q = $this->db->get('tblStudent');
		
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			
			return $data;
		}
	}
	
	public function getAllQuestions()
	{
		$this->db->select('*');
		$this->db->from('tblTutorialQuestions');
		$this->db->join('tblResponseType', 'tblResponseType.ID = tblTutorialQuestions.responseTypeID');

		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			
			return $data;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */