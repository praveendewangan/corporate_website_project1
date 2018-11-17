<?php

class Admin extends CI_Controller{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function index()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'admin';
			$this->load->model('admin/Admin_m');
			$this->load->model('home/Home_m');
			$data['logo']=$this->Home_m->logo();
			$data['menu']=$this->Home_m->menu();
			$data['map'] = $this->Home_m->map();
			$data['side']=$this->Admin_m->side_nav();
			$data['address'] = $this->Home_m->address();
			$data['get_touch'] = $this->Home_m->get_in_touch();
			$data['newsletter'] = $this->Home_m->newsletter();
			$data['footer'] = $this->Home_m->footer();
			$this->base('index_v',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function home()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'home';
			$this->load->model('admin/Admin_m');
			$this->load->model('home/Home_m');
			$data['side']=$this->Admin_m->side_nav();
			$data['quote']=$this->Home_m->banner_quote();
			$data['banner_bottom']=$this->Home_m->banner_bottom();
			$data['process_con'] = $this->Home_m->process_content();
			$data['about1'] = $this->Home_m->home_about1();
			$data['about2'] = $this->Home_m->home_about2();
			$data['content'] = $this->Home_m->home_content();
			$this->base('home',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function about()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'about';
			$this->load->model('about/About_m');
			$this->load->model('admin/Admin_m');
			$data['about_cl1'] = $this->About_m->about_cl_1();
			$data['about_cl1_heading'] = $this->About_m->about_cl_1_heading();
			$data['about_cl2'] = $this->About_m->about_cl_2();
			$data['about_sta'] = $this->About_m->about_statistics();
			$data['team'] = $this->About_m->team();
			$data['side']=$this->Admin_m->side_nav();
			$this->base('about',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function team()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'about';
			$this->load->model('about/About_m');
			$this->load->model('admin/Admin_m');
			$data['about_cl1'] = $this->About_m->about_cl_1();
			$data['about_cl1_heading'] = $this->About_m->about_cl_1_heading();
			$data['about_cl2'] = $this->About_m->about_cl_2();
			$data['about_sta'] = $this->About_m->about_statistics();
			$data['team'] = $this->About_m->team();
			$data['side']=$this->Admin_m->side_nav();
			$this->base('team',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function services()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'services';
			$this->load->model('services/Services_m');
			$this->load->model('admin/Admin_m');
			$data['services'] = $this->Services_m->services();
			$data['side']=$this->Admin_m->side_nav();
			$this->base('services',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function gallery()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'gallery';
			$this->load->model('admin/Admin_m');
			$this->load->model('gallery/Gallery_m');
			$data['side']=$this->Admin_m->side_nav();
			$data['gallery'] = $this->Gallery_m->gallery_content();
			$this->base('gallery',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function change_password()
	{
		if($this->session->userdata('account_type'))
		{
			$data['page'] = 'change_password';
			$this->load->model('admin/Admin_m');
			$data['side']=$this->Admin_m->side_nav();
			$this->base('change_password',$data);
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
    public function base($page = NULL, $page_data = NULL)
	{
		$data['content_view']=$page;
		$data['data']=$page_data;
		$this->load->view('admin/base_v',$data);
	}
	
	public function submit_menu()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['menu1'] = $this->input->post('menu1');
			$enter['menu2'] = $this->input->post('menu2');
			$enter['menu3'] = $this->input->post('menu3');
			$enter['menu4'] = $this->input->post('menu4');
			$enter['menu5'] = $this->input->post('menu5');
			$result = $this->Admin_m->update_menu($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_map()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['map'] = $this->input->post('map');
			$result = $this->Admin_m->update_map($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_address()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['address'] = $this->input->post('address');
			$enter['mail'] = $this->input->post('mail');
			$enter['contact'] = $this->input->post('contact');
			$result = $this->Admin_m->update_address($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_touch()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('touch');
			$enter['facebook'] = $this->input->post('facebook');
			$enter['twitter'] = $this->input->post('twitter');
			$enter['instagram'] = $this->input->post('instagram');
			$enter['pinterest'] = $this->input->post('pinterest');
			$result = $this->Admin_m->update_touch($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_news()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('news');
			$result = $this->Admin_m->update_news($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_footer()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('heading');
			$result = $this->Admin_m->update_footer($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_slider()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['sh1'] = $this->input->post('sh1');
			$enter['sh2'] = $this->input->post('sh2');
			$enter['sh3'] = $this->input->post('sh3');
			$enter['sh4'] = $this->input->post('sh4');
			$enter['sh5'] = $this->input->post('sh5');
			$enter['sd1'] = $this->input->post('sd1');
			$enter['sd2'] = $this->input->post('sd2');
			$enter['sd3'] = $this->input->post('sd3');
			$enter['sd4'] = $this->input->post('sd4');
			$enter['sd5'] = $this->input->post('sd5');
			$result = $this->Admin_m->update_slider($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_banner()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['sh1'] = $this->input->post('sh1');
			$enter['sh2'] = $this->input->post('sh2');
			$enter['sh3'] = $this->input->post('sh3');
			$enter['sh4'] = $this->input->post('sh4');
			$enter['sd1'] = $this->input->post('sd1');
			$enter['sd2'] = $this->input->post('sd2');
			$enter['sd3'] = $this->input->post('sd3');
			$enter['sd4'] = $this->input->post('sd4');
			$result = $this->Admin_m->update_banner($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_about_home()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['sh'] = $this->input->post('sh');
			$enter['sh1'] = $this->input->post('sh1');
			$enter['sh2'] = $this->input->post('sh2');
			$enter['sh3'] = $this->input->post('sh3');
			$enter['sh4'] = $this->input->post('sh4');
			$enter['sd1'] = $this->input->post('sd1');
			$enter['sd2'] = $this->input->post('sd2');
			$enter['sd3'] = $this->input->post('sd3');
			$enter['sd4'] = $this->input->post('sd4');
			$enter['si1'] = $this->input->post('si1');
			$enter['si2'] = $this->input->post('si2');
			$enter['si3'] = $this->input->post('si3');
			$enter['si4'] = $this->input->post('si4');
			$result = $this->Admin_m->update_about_home($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service_home()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['sh1'] = $this->input->post('sh1');
			$enter['sd1'] = $this->input->post('sh2');
			$enter['sp1'] = $this->input->post('sh3');
			$enter['sh2'] = $this->input->post('sh4');
			$enter['sd2'] = $this->input->post('sh5');
			$enter['sp2'] = $this->input->post('sh6');
			$enter['sh3'] = $this->input->post('sh7');
			$enter['sd3'] = $this->input->post('sh8');
			$enter['sp3'] = $this->input->post('sh9');
			$result = $this->Admin_m->update_service_home($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_about_column1()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('heading');
			$enter['sub1'] = $this->input->post('sub1');
			$enter['sub2'] = $this->input->post('sub2');
			$enter['sub3'] = $this->input->post('sub3');
			$enter['sub4'] = $this->input->post('sub4');
			$enter['dec1'] = $this->input->post('dec1');
			$enter['dec2'] = $this->input->post('dec2');
			$enter['dec3'] = $this->input->post('dec3');
			$enter['dec4'] = $this->input->post('dec4');
			$result = $this->Admin_m->update_about_column1($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_statistic()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('heading');
			$enter['sub1'] = $this->input->post('sub1');
			$enter['sub2'] = $this->input->post('sub2');
			$enter['sub3'] = $this->input->post('sub3');
			$enter['sub4'] = $this->input->post('sub4');
			$enter['dec1'] = $this->input->post('dec1');
			$enter['dec2'] = $this->input->post('dec2');
			$enter['dec3'] = $this->input->post('dec3');
			$enter['dec4'] = $this->input->post('dec4');
			$result = $this->Admin_m->update_statistic($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_logo()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			//$img=$image;
			//$img = str_replace('data:image/png;base64,', '', $img);
			//$img = str_replace(' ', '+', $img);
			//$fileData = base64_decode($img);
			//saving
			//$image_ext = strtotime("now");
			//$image_name = 'logoimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			//$fileName = './theme/backend/uploads/images/'.$image_name.'';
			//file_put_contents($fileName, $fileData);
            /* $upload_path = './theme/backend/uploads/images/'.$image_name.'"';
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '0';
            $config['max_filename'] = '255';
            $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('logo_image')) 
				{
					return false;
				}
				else
				{   
							
					$image_config['image_library'] = 'gd2';
					$image_config['source_image'] = $fileName;//$upload_data["file_path"] . 'product.png';
					$image_config['new_image'] = $fileTarget;//$upload_data["file_path"] . 'product.png';
					$image_config['quality'] = "100%";
					$image_config['maintain_ratio'] = FALSE;
					$image_config['width'] = 650;
					$image_config['height'] = 250;
					$image_config['x_axis'] = '0';
					$image_config['y_axis'] = '0';
					
					$this->load->library('image_lib',$image_config);
					//$this->image_lib->initialize($image_config); 
					 
					if (!$this->image_lib->crop())
					{
							return false;//redirect("errorhandler"); //If error, redirect to an error page
					}else{
			 */			//redirect("successpage");
					$result = $this->Admin_m->update_logo($image);
					if($result)
					{
						$data['Response'] = "Success";
						$data['status'] = "1";
						$data['Message']="Success";
						$data['logo']=$result;
					}
					else
					{
						$data['status']='0';
						$data['Response']="Fail";
						$data['Message']="Something went wrong";
						$data['logo']="";

					}	
				//}
					
                 
			//}
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_process_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
					$result = $this->Admin_m->update_process_image($image);
					if($result)
					{
						$data['Response'] = "Success";
						$data['status'] = "1";
						$data['Message']="Success";
						$data['logo']=$result;
					}
					else
					{
						$data['status']='0';
						$data['Response']="Fail";
						$data['Message']="Something went wrong";
						$data['logo']="";

					}	
				//}
					
                 
			//}
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_process_data()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('heading');
			$enter['sub1'] = $this->input->post('sh1');
			$enter['sub2'] = $this->input->post('sh2');
			$enter['dec1'] = $this->input->post('sd1');
			$enter['dec2'] = $this->input->post('sd2');
			$result = $this->Admin_m->update_process_data($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_about_column2()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$enter['heading'] = $this->input->post('heading');
			$result = $this->Admin_m->update_about_column2($enter);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_column2_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_column2_image($image);
			if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
				$data['logo']=$result;
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";
				$data['logo']="";

			}	
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member1_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_member1_image($image);
			if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
				$data['logo']=$result;
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";
				$data['logo']="";

			}	
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member2_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_member2_image($image);
			if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
				$data['logo']=$result;
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";
				$data['logo']="";

			}	
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member3_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_member3_image($image);
			if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
				$data['logo']=$result;
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";
				$data['logo']="";

			}	
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member4_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_member4_image($image);
			if($result)
			{
				$data['Response'] = "Success";
				$data['status'] = "1";
				$data['Message']="Success";
				$data['logo']=$result;
			}
			else
			{
				$data['status']='0';
				$data['Response']="Fail";
				$data['Message']="Something went wrong";
				$data['logo']="";

			}	
			echo json_encode($data);
			
		}
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_team_heading()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$heading = $this->input->post('heading');
			$result = $this->Admin_m->update_team_heading($heading);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member1()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['name'] = $this->input->post('mn1');
			$data['description'] = $this->input->post('md1');
			$data['facebook'] = $this->input->post('mf1');
			$data['twitter'] = $this->input->post('mt1');
			$data['instagram'] = $this->input->post('mi1');
			$data['pinterest'] = $this->input->post('mp1');
			$result = $this->Admin_m->update_member1($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member2()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['name'] = $this->input->post('mn1');
			$data['description'] = $this->input->post('md1');
			$data['facebook'] = $this->input->post('mf1');
			$data['twitter'] = $this->input->post('mt1');
			$data['instagram'] = $this->input->post('mi1');
			$data['pinterest'] = $this->input->post('mp1');
			$result = $this->Admin_m->update_member2($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member3()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['name'] = $this->input->post('mn1');
			$data['description'] = $this->input->post('md1');
			$data['facebook'] = $this->input->post('mf1');
			$data['twitter'] = $this->input->post('mt1');
			$data['instagram'] = $this->input->post('mi1');
			$data['pinterest'] = $this->input->post('mp1');
			$result = $this->Admin_m->update_member3($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_member4()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['name'] = $this->input->post('mn1');
			$data['description'] = $this->input->post('md1');
			$data['facebook'] = $this->input->post('mf1');
			$data['twitter'] = $this->input->post('mt1');
			$data['instagram'] = $this->input->post('mi1');
			$data['pinterest'] = $this->input->post('mp1');
			$result = $this->Admin_m->update_member4($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service1_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_service1_image($image);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service2_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_service2_image($image);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service3_image()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_service3_image($image);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service1()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['heading'] = $this->input->post('sh1');
			$data['description'] = $this->input->post('sd1');
			$result = $this->Admin_m->update_service1($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service2()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['heading'] = $this->input->post('sh1');
			$data['description'] = $this->input->post('sd1');
			$result = $this->Admin_m->update_service2($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_service3()
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['heading'] = $this->input->post('sh1');
			$data['description'] = $this->input->post('sd1');
			$result = $this->Admin_m->update_service3($data);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	public function submit_gallery_image($id=NULL)
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$image = $this->input->post('imgBase64');
			$result = $this->Admin_m->update_gallery_image($image,$id);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}
	
	public function submit_gallery($id=NULL)
	{
		if($this->session->userdata('account_type'))
		{
			$this->load->model('admin/Admin_m');
			$data['description'] = $this->input->post('sh1');
			$data['title'] = $this->input->post('sd1');
			$result = $this->Admin_m->update_gallery($data,$id);
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
		else
		{
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Please!</div>');
			redirect(base_url('login'));
		}
	}

}

?>
