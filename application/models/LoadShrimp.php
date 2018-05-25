<?php

class LoadShrimp extends CI_Model
{
	public function getmydata()
	{
		 $query = $this->db->query("SELECT table_catalog, table_schema, table_name, table_type FROM information_schema.tables WHERE table_catalog = 'shrimp' AND table_type = 'BASE TABLE' AND table_schema='public'");
		 return $query->result();		
		
		
		$this->db->select('table_catalog, table_schema, table_name, table_type');
		$this->db->where('table_catalog', 'shrimp');
		$this->db->where('table_type', 'BASE TABLE');
		$this->db->where('table_schema', 'public');
		$query = $this->db->get('information_schema.tables');
		return $query->result();
		// Executes: SELECT table_catalog, table_schema, table_name, table_type FROM information_schema.tables WHERE table_catalog = 'shrimp' AND table_type = 'BASE TABLE' AND table_schema='public'
	}
	
	public function justtablename()
	{
		$query = $this->db->query("SELECT table_name WHERE table_catalog = 'shrimp' AND table_type = 'BASE TABLE' AND table_schema='public'");
		return $query->result();
	}
	
	public function geomcol($table_name='shp_coastline')
	{
		//$query = $this->db->query("SELECT column_name FROM information_schema.columns WHERE table_catalog = 'shrimp' AND udt_name='geometry' AND table_schema ='public' AND table_name ='shp_coastline'");
		
		$this->db->select('column_name');
		$this->db->where('table_catalog', 'shrimp');
		$this->db->where('udt_name', 'geometry');
		$this->db->where('table_schema', 'public');
		$this->db->where('table_name', $table_name);
		$query = $this->db->get('information_schema.columns');
		$row = $query->row();
		return $row->column_name;
	}
	
	
}

?>