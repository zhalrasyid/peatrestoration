<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function index()
	{
		$this->load->helper('url');
		$this->load->view('include/header');
		$this->load->view('landing');
		$this->load->view('include/footer');
	}
	
	function pages($page='landing')
	{
		$this->load->helper('url');
		if(!file_exists('application/views/'.$page.'.php'))
		{
			show_404();
		}
		$this->load->view('include/header');
		$this->load->view($page);
		$this->load->view('include/footer');		
	}
	
	function datashow()
	{
		$this->load->model('simplequery');
		$data['spatialtables'] = $this->simplequery->getspatialtable();
		$this->load->view('include/header');
		$this->load->view('blog-single', $data);
		$this->load->view('include/footer');		
	}
		
	function dropdowndata($page)
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('LoadShrimp');
		$data['spatialtables'] = $this->LoadShrimp->getmydata();
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');		
	}
	
	function bufferdata()
	{
		$data['layer'] = $this->input->post("selbuff");
		$data['jarak'] = $this->input->post("dbuff");
				
		$this->load->view('include/header');
		$this->load->view('blog', $data);
		//$this->load->model('LoadShrimp');
		//$this->LoadShrimp->BufferData($data['layer'], $data['jarak']);
		
		$this->load->view('include/footer');
	}
}
?>