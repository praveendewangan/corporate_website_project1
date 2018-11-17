<?php
class Home_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function menu()
	{	
		$query = $this->db->query("SELECT * from menu where status='1' ");
		return $query->result();
	}
	public function logo()
	{	
		$query = $this->db->query("SELECT * from logo where status='1'");
		return $query->result();
	}
	public function banner_quote()
	{	
		$query = $this->db->query("SELECT * from banner_quote where status='1'");
		return $query->result();
	}
	public function banner_bottom()
	{	
		$query = $this->db->query("SELECT * from banner_bottom where status='1'");
		return $query->result();
	}
	public function process_content()
	{	
		$query = $this->db->query("SELECT * from process_content where status='1'");
		return $query->result();
	}
	public function home_about1()
	{	
		$query = $this->db->query("SELECT * from home_about1 where status='1'");
		return $query->result();
	}
	public function home_about2()
	{	
		$query = $this->db->query("SELECT * from home_about2 where status='1'");
		return $query->result();
	}
	public function home_content()
	{	
		$query = $this->db->query("SELECT * from home_content where status='1'");
		return $query->result();
	}
	public function map()
	{	
		$query = $this->db->query("SELECT * from map where status='1'");
		return $query->result();
	}
	public function get_in_touch()
	{	
		$query = $this->db->query("SELECT * from get_in_touch where status='1'");
		return $query->result();
	}
	public function address()
	{	
		$query = $this->db->query("SELECT * from address where status='1'");
		return $query->result();
	}
	public function newsletter()
	{	
		$query = $this->db->query("SELECT * from newsletter where status='1'");
		return $query->result();
	}
	public function footer()
	{	
		$query = $this->db->query("SELECT * from footer where status='1'");
		return $query->result();
	}
	
	
	
}
?>
