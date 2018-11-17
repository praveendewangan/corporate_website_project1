<?php
class Gallery_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function gallery_content()
	{	
		$query = $this->db->query("SELECT * from gallery where status='1' ");
		return $query->result();
	}
	
}
?>
