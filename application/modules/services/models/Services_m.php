<?php
class Services_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function services()
	{	
		$query = $this->db->query("SELECT * from services_content where status='1' ");
		return $query->result();
	}
	
}
?>
