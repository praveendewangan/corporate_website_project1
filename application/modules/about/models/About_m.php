<?php
class About_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function about_cl_1()
	{	
		$query = $this->db->query("SELECT * from about_cl1_content where status='1' ");
		return $query->result();
	}
	public function about_cl_1_heading()
	{	
		$query = $this->db->query("SELECT * from about_cl1_heading where status='1' ");
		return $query->result();
	}
	public function about_cl_2()
	{	
		$query = $this->db->query("SELECT * from about_cl2_heading where status='1' ");
		return $query->result();
	}
	public function about_statistics()
	{	
		$query = $this->db->query("SELECT * from about_statistics where status='1' ");
		return $query->result();
	}
	public function team()
	{	
		$query = $this->db->query("SELECT * from our_team where status='1' ");
		return $query->result();
	}
	
}
?>
