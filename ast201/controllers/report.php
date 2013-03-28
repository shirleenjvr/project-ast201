<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		//$this->load->view('main');
		// Provide view with list of functional reports
		echo 'Report Controller';
	}

	public function listStaff()
	{
		// Query Database for list of students
		$this->load->model('report_model');
		
		$data['rows'] = $this->report_model->getAllStaff();
		
		// Send data to a view
		$this->load->view('report', $data);
	}
	
	public function listStudents()
	{
		// Query Database for list of students
		$this->load->model('report_model');
		
		$data['rows'] = $this->report_model->getAllStudents();
		
		// Send data to a view
		$this->load->view('report', $data);
	}
	
	public function listQuestions()
	{
		// Query Database for list of questions
		$this->load->model('report_model');
		
		$data['rows'] = $this->report_model->getAllQuestions();
		
		// Send data to a view
		$this->load->view('report', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */