<?php

class Home extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		$data['page'] = 'home';
		$this->load->model('home/Home_m');
		$data['menu']=$this->Home_m->menu();
		$data['logo']=$this->Home_m->logo();
		$data['quote']=$this->Home_m->banner_quote();
		$data['banner_bottom']=$this->Home_m->banner_bottom();
		$data['process_con'] = $this->Home_m->process_content();
		$data['about1'] = $this->Home_m->home_about1();
		$data['about2'] = $this->Home_m->home_about2();
		$data['content'] = $this->Home_m->home_content();
		$data['map'] = $this->Home_m->map();
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

}

?>
