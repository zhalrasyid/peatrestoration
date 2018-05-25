<?php

class simplequery extends CI_Model
{
	public function run_query($kueri)
	{
		$query = $this->db->query($kueri);
		if (!$query)
		{
			return $error = $this->db->error(); // Has keys 'code' and 'message'
		}
		else
		{
			return $query->result();
		}
		
	}
	
	public function getspatialtable()
	{
		$this->db->select('table_name, column_name');
		$this->db->where('table_catalog', 'mit');	
		$this->db->where('udt_name', 'geometry');
		$this->db->where('table_schema', 'public');
		
		$query = $this->db->get('information_schema.columns');
		
		return $query->result();
	}
	
	public function get_geometrycolumnname($table_name)
	{
		$this->db->select('column_name');
		$this->db->where('table_catalog', 'mit');
		$this->db->where('udt_name', 'geometry');
		$this->db->where('table_schema', 'public');
		$this->db->where('table_name', $table_name);
		$query = $this->db->get('information_schema.columns');
		$row = $query->row();
		
		return $row->column_name;
	}
	
	public function delete_table($table_name)
	{
		$this->db->query("DROP TABLE IF EXISTS ".$table_name);
		$this->db->query("DROP INDEX IF EXISTS ".$table_name."_idx");
	}
	public function get_ordinal($table_name)
	{
		$this->db->select('ordinal_position');
		$this->db->where('table_catalog', 'Shrimp');
		$this->db->where('udt_name', 'geometry');
		$this->db->where('table_schema', 'public');
		$this->db->where('table_name', $table_name);
		$query = $this->db->get('information_schema.columns');
		$row = $query->row();
		
		return $row->ordinal_position;
	}
	
	public function run_curl($table_name)
	{
		exec("curl -v -u admin:geoserver -XPOST -H \"Content-type: text/xml\" -d \"<featureType><name>".$table_name."</name></featureType>\" http://localhost:8080/geoserver/rest/workspaces/mit/datastores/udang/featuretypes");

	}
	
	public function run_psql($filename, $table_name, $srid='4326')
	{
		$folder_upload="C:\\xampp\\htdocs\\shrimp\\uploads\\tes";
		$string_run="shp2pgsql -s ".$srid." \"".$folder_upload."\\".$filename.".shp\" public.".$table_name." >\"".$folder_upload."\\".$table_name.".sql\"";
		return $string_run;
		exec($string_run);
	}
	
	public function gen_viewmap($table_name)
	{
		$TMP_MAPS = file_get_contents("./asset/temp/singlelayer.php");
		$TMP_MAPS = str_replace("[table-name]", $table_name, $TMP_MAPS);
		file_put_contents("./application/views/map_".$table_name.".php", $TMP_MAPS);
		return $TMP_MAPS;
	}
	
	public function runSQL($filename)
	{
		$this->db->query(file_get_contents($filename));
	}
	
}

?>