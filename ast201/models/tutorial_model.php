<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial_Model extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();	
	}
	
	public function getQuestion($id)
	{
		$this->db->select('*');
		$this->db->from('tblTutorialQuestions');
		$this->db->join('tblResponseType', 'tblResponseType.ID = tblTutorialQuestions.responseTypeID');
      $this->db->where('tblTutorialQuestions.ID', $id);

		$q = $this->db->get();
		
		if($q->num_rows() == 1) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			
			return $data;
		}
	}
}

/* End of file tutorial_model.php */
/* Location: ./application/controllers/tutorial_model.php */
