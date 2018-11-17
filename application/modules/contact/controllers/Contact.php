<?php

class Contact extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		$data['page'] = 'contact';
		$this->load->model('home/Home_m');
		$data['menu']=$this->Home_m->menu();
		$data['logo']=$this->Home_m->logo();
		$data['address'] = $this->Home_m->address();
		$data['get_touch'] = $this->Home_m->get_in_touch();
		$data['newsletter'] = $this->Home_m->newsletter();
		$data['footer'] = $this->Home_m->footer();
		$this->base('index_v',$data);
	}
	
    public function base($page = NULL, $page_data = NULL)
	{
		$data['content_view']=$page;
		$data['data']=$page_data;
		$this->load->view('home/base_v',$data);
	}
	
	public function query()
	{
		$this->load->model('contat/Contact_m');
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['message'] = $this->input->post('message');
		$result = $this->Contact_m->query_submit($data);			
		if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";

			}	
			echo json_encode($data);
	}

}

?>
