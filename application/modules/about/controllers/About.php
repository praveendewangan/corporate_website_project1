<?php

class About extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		$data['page'] = 'about';
		$this->load->model('home/Home_m');
		$this->load->model('about/About_m');
		$data['menu']=$this->Home_m->menu();
		$data['logo']=$this->Home_m->logo();
		$data['address'] = $this->Home_m->address();
		$data['get_touch'] = $this->Home_m->get_in_touch();
		$data['newsletter'] = $this->Home_m->newsletter();
		$data['about_cl1'] = $this->About_m->about_cl_1();
		$data['about_cl1_heading'] = $this->About_m->about_cl_1_heading();
		$data['about_cl2'] = $this->About_m->about_cl_2();
		$data['about_sta'] = $this->About_m->about_statistics();
		$data['team'] = $this->About_m->team();
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
