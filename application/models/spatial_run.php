<?php

class spatial_run extends CI_Model
{
	function create_tbl_index($new_tablename, $geom_col)
	{
		$this->db->query("DROP INDEX IF EXISTS ".$new_tablename."_idx");
		$this->db->query("CREATE INDEX ".$new_tablename."_idx ON ".$new_tablename." USING GIST (".$geom_col.")");
		$this->db->query("VACUUM ANALYZE ".$new_tablename);
	}
	
	function Buffer($table_name, $geom_col, $buffer_size, $new_tablename)
	{
		if ($new_tablename=="")
			$new_tablename = $table_name."buff".$buffer_size;
		
		$query = $this->db->query("DROP TABLE IF EXISTS ".$new_tablename);		
		$query = $this->db->query("CREATE TABLE ".$new_tablename." AS SELECT ST_Buffer(".$geom_col.", ".$buffer_size.") as geom FROM ".$table_name);
		$query = $this->db->query("SELECT populate_geometry_columns()");
				
	}
	
	function Intersection($table_name1, $geom_col1, $table_name2, $geom_col2, $new_tablename)
	{
		if ($new_tablename=="")
			$new_tablename = $table_name1."intersect".$table_name2;
		
		$query = $this->db->query("DROP TABLE IF EXISTS ".$new_tablename);		
		$this->db->query("CREATE TABLE ".$new_tablename." AS SELECT ST_GeomFromEWKT(ST_AsEWKT((ST_Dump(table_temp.geom)).geom)) as geom FROM 
		(SELECT ST_Intersection(A.".$geom_col1.", B.".$geom_col1.") as geom FROM ".$table_name1." as A, ".$table_name2." as B) AS table_temp");	
		$query = $this->db->query("SELECT populate_geometry_columns()");
			
	}
	
	function Dissolve($table_name, $geom_col, $new_tablename)
	{
		if ($new_tablename=="")
			$new_tablename = $table_name."dissolve";
		
		$query = $this->db->query("DROP TABLE IF EXISTS ".$new_tablename);		
		$query = $this->db->query("CREATE TABLE ".$new_tablename." AS SELECT ST_Union(".$geom_col1.") as geom FROM ".$table_name);
		$query = $this->db->query("SELECT populate_geometry_columns()");
		
	}
	
}

?>