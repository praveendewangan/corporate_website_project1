<?php

class Login extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		$data['page'] = 'login';
		$this->base('index_v',$data);
	}
	public function validate()
	{
		$this->load->model('login/Login_m');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$verify_login = $this->Login_m->login_detail($username);
		$hash_password = $verify_login->password;
		$hash = password_verify($password,$hash_password);
		if($hash)
		{
					$userdata = array( 
						'id' => "$verify_login->id",
						'username' => "$verify_login->username",
						'log_in' => true,
						'account_type' => "$verify_login->account_type"
						);
					$this->session->set_userdata($userdata);
					$this->session->set_flashdata('successMessage','<div class="alert alert-success">Login Successfully, Welcome !</div>');
						redirect(base_url('admin'));
		}
		else
		{
						 
						$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password'.var_dump($username).'</div>');
					redirect(base_url('login'));
		}
	}
	
    public function base($page = NULL, $page_data = NULL)
	{
		$data['content_view']=$page;
		$data['data']=$page_data;
		$this->load->view('login/base_v',$data);
	}
	public function logout() {
		$data = array('id','username','log_in','account_type');
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('successMessage','<div class="alert alert-success">Logout Successfully</div>');
		redirect(base_url('login'));
	}

}

?>
