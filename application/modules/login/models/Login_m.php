<?php
class Login_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function login_detail($username)
	{	
		$query = $this->db->query("SELECT * from admin where username='".$username."' and status='1'");
		return $row = $query->row();
	}
	
	
}
?>
