<?php

class Services extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		$data['page'] = 'services';
		$this->load->model('home/Home_m');
		$this->load->model('services/Services_m');
		$data['menu']=$this->Home_m->menu();
		$data['logo']=$this->Home_m->logo();
		$data['address'] = $this->Home_m->address();
		$data['get_touch'] = $this->Home_m->get_in_touch();
		$data['newsletter'] = $this->Home_m->newsletter();
		$data['services'] = $this->Services_m->services();
		$data['footer'] = $this->Home_m->footer();
		$this->base('index_v',$data);
	}
	
    public function base($page = NULL, $page_data = NULL)
	{
		$data['content_view']=$page;
		$data['data']=$page_data;
		$this->load->view('home/base_v',$data);
	}

}

?>
