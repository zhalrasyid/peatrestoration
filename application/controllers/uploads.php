<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uploads extends CI_Controller 
{	
	public function do_upload()
	{
		
		$this->load->helper(array('form', 'url'));
		
		$config['upload_path'] = './uploads/tes';
		$config['allowed_types']= '*';
		$config['overwrite'] = 'TRUE';
		$config['max_size'] = '20000';
		// die;
		$this->load->library('upload', $config);
		
		$number_of_files = sizeof($_FILES['shapefiles']['tmp_name']);
		$files = $_FILES['shapefiles'];
		for ($i = 0; $i < $number_of_files; $i++) 
		{
			$_FILES['shapefiles']['name'] = $files['name'][$i];
			$_FILES['shapefiles']['type'] = $files['type'][$i];
			$_FILES['shapefiles']['tmp_name'] = $files['tmp_name'][$i];
			$_FILES['shapefiles']['error'] = $files['error'][$i];
			$_FILES['shapefiles']['size'] = $files['size'][$i];
			
			//now we initialize the upload library
			$this->upload->initialize($config);	
			$this->upload->set_allowed_types('*');
			
			// we retrieve the number of files that were uploaded
			if ($this->upload->do_upload('shapefiles'))
			{
			  $data['upload_data'][$i] = $this->upload->data();
			}
		}
		
		// print_r($data['upload_data']);
		// die;

		
		$folder_upload="C:\\xampp\\htdocs\\shrimp\\uploads\\tes";
		
		$this->load->model('simplequery');
		//$this->simplequery->run_psql($data['upload_data'][0]['raw_name'], $data['tablename'], $data['srid']);
		$data['tes'] = $this->simplequery->run_psql($data['upload_data'][0]['raw_name'], $this->input->post('tablename'), $this->input->post('srid'));

		// $command = 'shp2pgsql -s 2100 -d '.$folder_upload."/".$data['upload_data'][0]['raw_name'].".shp".'  | psql -h localhost -p 5432 -d mit -U ketuker';
		// shell_exec($command);
		echo exec($data['tes']);

		// system($command);
		// exec($data['tes']);
		// exec("psql -h localhost -d mit -U ketuker -P remember-f ".$folder_upload."/".$this->input->post('tablename').".sql");
		// $exec = "shp2pgsql -s ".$this->input->post('srid')." neighborhoods public.".$this->input->post('tablename')." >".$this->input->post('tablename').".sql"
		// exec($data['tes'],$out,$ret);
		// print_r($out);

		// echo exec('shp2pgsql');
		// print_r($data['tes']);
		// // print_r($command)
		// die;
		$this->simplequery->delete_table($this->input->post('tablename'));
		
		$this->simplequery->runSQL($folder_upload."\\".$this->input->post('tablename').".sql");
		

		for ($i=0; $i <  count($data['upload_data']); $i++) { 
			unlink($folder_upload."\\".$data['upload_data'][$i]['orig_name']);
		}
		
		$this->load->view('include/header');
		$this->load->view('00UploadSukses', $data);
		$this->load->view('include/footer');		
	}
	
}