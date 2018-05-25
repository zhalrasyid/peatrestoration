<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller 
{
	function index()
	{
		$this->load->helper('url');
		$this->load->view('include/header');
		$this->load->view('landing');
		$this->load->view('include/footer');
	}
	
	function view($page='landing')
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
	
	function visual($page='MapView')
	{
		$this->load->view('include/header');
		$this->load->view($page);
		$this->load->view('include/Leaflet');
		$this->load->view('include/footer');
	}
	
	
	function viewmap($page='map_def')
	{
		$this->load->view($page);
		/*$page="map_";
		$data['tablename']=$tablename;
		$this->load->view($page, $data);*/
	}
}