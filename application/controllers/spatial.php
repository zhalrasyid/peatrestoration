<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spatial extends CI_Controller 
{
	function spatialTable($page_name = 'SpatialTable')
	{
		$this->load->model('simplequery');
		$data['spatialtables'] = $this->simplequery->getspatialtable($c_dbname);
		$this->load->view('include/header');
		$this->load->view($page_name, $data);
		$this->load->view('include/footer');	
	}
	
	function dropmytable($tablename)
	{
		$this->load->helper('url');
		$this->load->model('simplequery');
		$this->simplequery->delete_table($tablename);
		redirect($base_url.'index.php/spatial/spatialTable/SpatialTable', 'refresh'); // change this url with proper link on your pc setting.
	}
	
	function buffer($page='01Buffer')
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('simplequery');
		$data['spatialtables'] = $this->simplequery->getspatialtable();
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');		
	}
	function runbuffer($page='01BufferRun')
	{
		$this->load->model('simplequery');
		$this->load->model('spatial_run');
		
		$data['layer'] = $this->input->post("layer");
		
		$data['buffsize'] = $this->input->post("buffsize");
		$data['newtblname'] = $this->input->post("newtblname");
		
		$data['geomcol'] = $this->simplequery->get_geometrycolumnname($data['layer']);
		

		$this->spatial_run->Buffer($data['layer'], $data['geomcol'], $data['buffsize'], $data['newtblname']);
		$data['geomcolnew'] = $this->simplequery->get_geometrycolumnname($data['newtblname']);
		$this->spatial_run->create_tbl_index($data['newtblname'], $data['geomcolnew']);
		$this->simplequery->run_curl($data['newtblname']);
		$this->simplequery->gen_viewmap($data['newtblname']);
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');
	}
	/*function runbuffer($page='01BufferRun')
	{
		$data['layer'] = $this->input->post("layer");
		$data['buffsize'] = $this->input->post("buffsize");
		$data['newtblname'] = $this->input->post("newtblname");
		
		$this->load->model('simplequery');
		$data['geomcol'] = $this->simplequery->get_geometrycolumnname($data['layer']);
		
		$this->load->model('spatial_run');
		$this->spatial_run->Buffer($data['layer'], $data['geomcol'], $data['buffsize'], $data['newtblname']);
		
		$this->simplequery->run_curl($data['newtblname']);
		$this->simplequery->gen_viewmap($data['newtblname']);
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');
	}*/
	
	function intersect($page='03Intersect')
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('simplequery');
		$data['spatialtables'] = $this->simplequery->getspatialtable();
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');		
	}
	
	function runintersect($page='03IntersectRun')
	{
		$data['layer1'] = $this->input->post("layer1");
		$data['layer2'] = $this->input->post("layer2");
		$data['newtblname'] = $this->input->post("newtblname");
		
		$this->load->model('simplequery');
		$data['geomcol1'] = $this->simplequery->get_geometrycolumnname($data['layer1']);
		$data['geomcol2'] = $this->simplequery->get_geometrycolumnname($data['layer2']);
		
		$this->load->model('spatial_run');
		$this->spatial_run->Intersection($data['layer1'], $data['geomcol1'], $data['layer2'], $data['geomcol2'], $data['newtblname']);
		$data['geomcolnew'] = $this->simplequery->get_geometrycolumnname($data['newtblname']);
		$this->spatial_run->create_tbl_index($data['newtblname'], $data['geomcolnew']);
		$this->simplequery->run_curl($data['newtblname']);
		$this->simplequery->gen_viewmap($data['newtblname']);
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');
	}
	
	function dissolve($page='04Dissolve')
	{
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('simplequery');
		$data['spatialtables'] = $this->simplequery->getspatialtable();
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');		
	}
	
	function rundissolve($page='04DissolveRun')
	{
		$data['layer1'] = $this->input->post("layer");
		$data['newtblname'] = $this->input->post("newtblname");
		
		$this->load->model('simplequery');
		$data['geomcol'] = $this->simplequery->get_geometrycolumnname($data['layer']);
		
		$this->load->model('spatial_run');
		$this->spatial_run->Dissolve($data['layer'], $data['geomcol'], $data['newtblname']);
		
		$this->simplequery->run_curl($data['newtblname']);
		$this->simplequery->gen_viewmap($data['newtblname']);
		
		$this->load->view('include/header');
		$this->load->view($page, $data);
		$this->load->view('include/footer');
	}
	
	
}