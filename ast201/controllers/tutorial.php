<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial extends CI_Controller {

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
		echo 'Tutorial Controller<br /><br />';
      echo '<a href="' . base_url("/tutorial/demoQuestion/1") . '">demoQuestion</a>';
	}

	public function demoQuestion()
	{
		// Query Database for list of students
		$this->load->model('tutorial_model');
		
      $id = $this->uri->segment(3);
		$data['rows'] = $this->tutorial_model->getQuestion($id);
		
      // print_r($data);
		// Send data to a view
		$this->load->view('question', $data);
	}
}

/* End of file tutorial.php */
/* Location: ./application/controllers/tutorial.php */
