<?php
class Admin_m extends CI_Model{

	public function __contructor()
	{
		parent::__constructor();
	}
	
	public function side_nav()
	{	
		$query = $this->db->query("SELECT * from admin_side_nav where status='1'");
		return $query->result();
	}
	public function update_menu($data = NULL)
	{
		for($i=1;$i<=count($data);$i++)
		{
				$update_detail = array(
					'menu_name' => $data["menu".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('menu',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_map($data = NULL)
	{
				$update_detail = array(
					'map' => $data["map"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('map',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_address($data = NULL)
	{
				$update_detail = array(
					'address' => $data["address"],
					'mail' => $data["mail"],
					'contact' => $data["contact"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('address',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_touch($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('get_in_touch',$update_detail);
				$update_detail = array(
					'url' => $data["facebook"]
					);
				$this->db->where('id', "2");
				$ret[] = $this->db->update('get_in_touch',$update_detail);
				$update_detail = array(
					'url' => $data["twitter"]
					);
				$this->db->where('id', "3");
				$ret[] = $this->db->update('get_in_touch',$update_detail);
				$update_detail = array(
					'url' => $data["instagram"]
					);
				$this->db->where('id', "4");
				$ret[] = $this->db->update('get_in_touch',$update_detail);
				$update_detail = array(
					'url' => $data["pinterest"]
					);
				$this->db->where('id', "5");
				$ret[] = $this->db->update('get_in_touch',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_news($data = NULL)
	{
				$update_detail = array(
					'description' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('newsletter',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_footer($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('footer',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_slider($data = NULL)
	{
		for($i=1;$i<=5;$i++)
		{
				$update_detail = array(
					'heading' => $data["sh".$i.""],
					'para' => $data["sd".$i.""]
					);
				$this->db->where('id', "$i");
				$ret[] = $this->db->update('banner_quote',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_banner($data = NULL)
	{
		for($i=1;$i<=4;$i++)
		{
				$update_detail = array(
					'heading' => $data["sh".$i.""],
					'para' => $data["sd".$i.""]
					);
				$this->db->where('id', "$i");
				$ret[] = $this->db->update('banner_bottom',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_about_home($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["sh"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('home_about1',$update_detail);
		for($i=1;$i<=12;$i++)
		{
				$update_detail = array(
					'heading' => $data["sh".$i.""],
					'para' => $data["sd".$i.""],
					'icon' => $data["si".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('home_about2',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_service_home($data = NULL)
	{
		for($i=1;$i<=3;$i++)
		{
				$update_detail = array(
					'heading' => $data["sh".$i.""],
					'sub_heading' => $data["sd".$i.""],
					'para' => $data["sp".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('home_content',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_about_column1($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('about_cl1_heading',$update_detail);
		for($i=1;$i<=4;$i++)
		{
				$update_detail = array(
					'heading' => $data["sub".$i.""],
					'para' => $data["dec".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('about_cl1_content',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_statistic($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('about_cl1_heading',$update_detail);
		for($i=1;$i<=4;$i++)
		{
				$update_detail = array(
					'heading' => $data["sub".$i.""],
					'para' => $data["dec".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('about_statistics',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function update_logo($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'logoimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('logo',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	
	public function update_process_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'processimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('process_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_process_data($data = NULL)
	{
		for($i=1;$i<=2;$i++)
		{
				$update_detail = array(
					'heading' => $data["sub".$i.""],
					'para' => $data["dec".$i.""]
					);
				$this->db->where('id', $i);
				$ret[] = $this->db->update('process_content',$update_detail);
		}
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_about_column2($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('about_cl2_heading',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_column2_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'column2image-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('about_cl2_heading',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_member1_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'member1image-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "2");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_member2_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'member2image-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "3");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_member3_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'member3image-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "4");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_member4_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'member4image-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "5");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_team_heading($data = NULL)
	{
				$update_detail = array(
					'heading' => $data
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_member1($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["name"],
					'description' => $data["description"],
					'facebook' => $data["facebook"],
					'twitter' => $data["twitter"],
					'instagram' => $data["instagram"],
					'pinterest' => $data["pinterest"]
					);
				$this->db->where('id', "2");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_member2($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["name"],
					'description' => $data["description"],
					'facebook' => $data["facebook"],
					'twitter' => $data["twitter"],
					'instagram' => $data["instagram"],
					'pinterest' => $data["pinterest"]
					);
				$this->db->where('id', "3");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_member3($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["name"],
					'description' => $data["description"],
					'facebook' => $data["facebook"],
					'twitter' => $data["twitter"],
					'instagram' => $data["instagram"],
					'pinterest' => $data["pinterest"]
					);
				$this->db->where('id', "4");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_member4($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["name"],
					'description' => $data["description"],
					'facebook' => $data["facebook"],
					'twitter' => $data["twitter"],
					'instagram' => $data["instagram"],
					'pinterest' => $data["pinterest"]
					);
				$this->db->where('id', "5");
				$ret[] = $this->db->update('our_team',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_service1_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'serviceimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_service2_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'serviceimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "2");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_service3_image($image = NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'serviceimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', "3");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_service1($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"],
					'para' => $data["description"]
					);
				$this->db->where('id', "1");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_service2($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"],
					'para' => $data["description"]
					);
				$this->db->where('id', "2");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_service3($data = NULL)
	{
				$update_detail = array(
					'heading' => $data["heading"],
					'para' => $data["description"]
					);
				$this->db->where('id', "3");
				$ret[] = $this->db->update('services_content',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function update_gallery_image($image = NULL,$id=NULL)
	{
		
			$img=$image;
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$fileData = base64_decode($img);
			//saving
			$image_ext = strtotime("now");
			$image_name = 'galleryimage-'.$image_ext.'.png';
			//$fileTarget = './theme/backend/images/'.$image_name.'';
			$fileName = './theme/backend/uploads/images/'.$image_name.'';
			file_put_contents($fileName, $fileData);
				$update_detail = array(
					'image' => $fileName
					);
				$this->db->where('id', $id);
				$ret[] = $this->db->update('gallery',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return $fileName;
		}
	}
	public function update_gallery($data = NULL,$id=NULL)
	{
				$update_detail = array(
					'description' => $data["description"],
					'title' => $data["title"]
					);
				$this->db->where('id', $id);
				$ret[] = $this->db->update('gallery',$update_detail);
		if($ret)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	
}
?>
