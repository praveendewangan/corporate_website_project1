<?php
class Home_Model extends CI_Model
{
    public function __construct()
    {
            parent::__construct();
    }
    
    public function getMenuDetails($menu_id)
    {
        $result=$this->db->query("select * from data_menu where id='".$menu_id."'");
        return $result->result();
    }
    
    public function checkRegisterNumber($mobile_number)
    {
        $result=$this->db->query("select * from user where mobile='".$mobile_number."'");
        $row=$result->result();
        return $row;
    }

    public function registerMobile($mobile_number)
    {
        //$otp=  rand(100000, 999999);
        $data=array("mobile"=>$mobile_number);
        $this->db->insert("user",$data);
        $id=$this->db->insert_id();
        $result=$this->db->query("select * from user where id='".$id."'");
        $row=$result->result();
        return $row;
    }


    public function getAllTrackOrders()
    {
        $user_id=$this->session->userdata("id");
        $result=$this->db->query("select user_order.id,user_order.order_code from user_order where user_id='".$user_id."' and (order_status='0' or order_status='4') order by order_date desc");
        return $result->result();
    }
    
    public function getLastOrder()
    {
        $user_id=$this->session->userdata("id");
        $result=$this->db->query("select user_order.id,user_order.order_code from user_order where user_id='".$user_id."' and (order_status='0' or order_status='4') order by order_date desc limit 0,1");
        return $result->result();
    }
    
    public function getLastOrderMenu($order_id)
    {
        $result=$this->db->query("select order_slot_details.id as slot_details_id,data_menu.id,data_menu.name from data_menu "
                . "LEFT JOIN order_slot_details ON (order_slot_details.menu_id=data_menu.id) "
                . "where order_slot_details.order_id='".$order_id."'");
        return $result->result();
    }
    
    public function getLastOrderMenuDeliveryBoy($order_slot_details_id)
    {
        $result=$this->db->query("select order_mapping.*,order_slot_details.status from order_mapping,order_slot_details where order_mapping.order_slot_details_id='".$order_slot_details_id."' and order_mapping.order_slot_details_id=order_slot_details.id order by order_mapping.time DESC");
        return $result->result();
    }
    
    public function getWarehouseLatLong($slot_id)
    {
        $result=$this->db->query("select  warehosuse_details.latitude, warehosuse_details.longitude from  warehosuse_details,order_slot_details where  warehosuse_details.id=order_slot_details.warehouse_id and order_slot_details.id='".$slot_id."'");
        return $result->result();
    }
    
    public function getTokriCash()
    {
        $user_id=$this->session->userdata("id");
        $result=$this->db->query("select amount,non_promotional_amount from tokri_cash where user_id='".$user_id."'");
        $row=$result->result();
        if(count($row)>0)
        {
            return $row[0]->amount;
        }
        else
        {
            return 0;
        }
    }
    
    public function getCurrentOrders()
    {
        $user_id=$this->session->userdata("id");
        $result=$this->db->query("select count(id) as num from user_order where user_id='".$user_id."'");
        $row=$result->result();
        return $row[0]->num;
    }
    
    public function getLocation($location_id)
    {
        $result=$this->db->query("select data_location.id as location_id,"
                . "data_location.name as location_name, "
                . "data_city.id as city_id, "
                . "data_city.name as city_name "
                . "from data_location,data_city "
                . "where data_location.city_id=data_city.id "
                . "and data_location.id='".$location_id."'");
        return $result->result();
    }
    
    public function getAllWarehouse($location_id)
    {
        $result=$this->db->query("select id,"
                . "warehouse_name,"
                . "secondary_warehouse_id "
                . "from warehosuse_details "
                . "where id in (select distinct warehouse_id from warehouse_location where location_id='".$location_id."') and is_active='1'");
        return $result->result();
    }
    
    public function getAllMenu($location_id)
    {
        $warehouses=$this->session->userdata("warehouses");
        $central_warehouse = $this->session->userdata("central_warehouses");
        $result=$this->db->query("select data_menu.* "
                . "from data_menu, "
                . "data_menu_warehouse_mapping "
                . "where "
                . "data_menu.id=data_menu_warehouse_mapping.menu_id "
                . "and "
                . "data_menu.is_active='1' "
                . "and data_menu_warehouse_mapping.warehouse_id in (".implode(",",$central_warehouse).") " 
                . "and data_menu_warehouse_mapping.is_active='1' and "
                . "data_menu_warehouse_mapping.menu_id in 
                    (select category.menu_id 
                    from 
                    category,data_menu_warehouse_mapping,product_details,product_category,product_availability,product_sku  
                    where 
                    category.menu_id=data_menu_warehouse_mapping.menu_id 
                    and category.id=product_category.category_id 
                    and product_category.product_id=product_availability.product_id 
                    and product_availability.warehouse_id in (".  implode(",",$central_warehouse).") 
                    and product_availability.is_active='1' 
                    and product_availability.sku_id<>'0' 
                    and product_sku.product_id=product_details.id 
                    and product_sku.is_active='1' 
                    and product_category.product_id=product_details.id 
                    and product_details.is_active='1'
                    ) "
                . " and data_menu.is_active='1' order by data_menu.id ASC");
        return $result->result();
    }
    
     public function getAllCategory($menu_id)
    {
         $warehouses=$this->session->userdata("warehouses");
        $location_id=$this->session->userdata("location_id");
         $central_warehouse = $this->session->userdata("central_warehouses");
//        $result=$this->db->query("select distinct category.id,
//            category.name,
//            category.category_image,
//            category.no_of_subcategory as num,
//            category.category_priority as p 
//            from category 
//            LEFT JOIN data_menu_warehouse_mapping ON (category.menu_id=data_menu_warehouse_mapping.menu_id) 
//            LEFT JOIN product_category ON (category.id=product_category.category_id) 
//            LEFT JOIN product_availability ON (product_category.product_id=product_availability.product_id) 
//            LEFT JOIN product_details ON (product_category.product_id=product_details.id) 
//            LEFT JOIN product_sku ON (product_sku.product_id=product_details.id) 
//            where product_details.is_active='1' 
//            and category.menu_id='".$menu_id."' 
//            and product_availability.warehouse_id=data_menu_warehouse_mapping.warehouse_id 
//            and product_availability.is_active='1' 
//            and product_availability.sku_id<>'0' 
//            and product_sku.is_active='1' 
//            and data_menu_warehouse_mapping.warehouse_id in (".  implode(",",$warehouses).") 
//            and category.is_active='1' order by p DESC");
        
        $result=$this->db->query("select distinct category.id,
                                    category.name,
                                    category.category_image,
                                    category.no_of_subcategory as num,
                                    category.category_priority as p 
                                    from category
                                    LEFT JOIN data_menu_warehouse_mapping ON (category.menu_id=data_menu_warehouse_mapping.menu_id) 
                                    where category.menu_id = '".$menu_id."' 
                                    and data_menu_warehouse_mapping.warehouse_id in (".  implode(",",$central_warehouse).")  
                                    and category.id in (
                                        select product_category.category_id 
                                        from product_category, product_availability,product_details,product_sku 
                                        where product_category.product_id = product_availability.product_id 
                                        and product_availability.warehouse_id in (".  implode(",",$central_warehouse).")  
                                        and product_details.id=product_sku.product_id 
                                        and product_availability.product_id=product_details.id 
					and product_availability.is_active='1' 
                                        and product_details.is_active='1'
                                        and product_sku.is_active='1' 
                                        and product_availability.sku_id<>'0' order by product_category.category_id asc
                                    ) and category.is_active='1' order by p desc,category.id asc");
        
        
        return $result->result();
    }
    public function getAllSubcategory($category_id)
    {
        $location_id=$this->session->userdata("location_id");
        $central_warehouse = $this->session->userdata("central_warehouses");
        $result=$this->db->query("select distinct category.id, 
            category.name,
            category.subcategory_priority as p 
            from 
            category
            LEFT JOIN product_category ON (category.id=product_category.subcategory_id) 
            LEFT JOIN product_availability ON (product_category.product_id=product_availability.product_id) 
            LEFT JOIN product_details ON (product_category.product_id=product_details.id) 
            LEFT JOIN product_sku ON (product_details.id=product_sku.product_id)
            where category.parent_id='".$category_id."' and category.is_active='1' 
            and product_availability.is_active='1' 
            and product_sku.is_active='1' 
            and product_availability.sku_id<>'0' 
            and product_details.is_active='1' 
            AND product_availability.warehouse_id in (".implode(",", $central_warehouse).") 
            order by p desc,category.id asc");
        return $result->result();
    }
    
    //-----------------function for get all banners-----------------------
    public function getAllBanner($location_id)
    {
        $result=$this->db->query("select * from banner where banner.city_id in (select distinct city_id from data_location where id='".$location_id."') and is_active='1' order by priority desc");
        return $result->result();
    }
    //-----------------End of function for get all banners----------------
    
    //-------------Function for getAllAdvertisements----------------------
    public function getAllAdvertisements($location_id)
    {
        $result=$this->db->query("select * from advertisement where city_id in (select distinct city_id from data_location where id='".$location_id."') and is_active='1'");
        return $result->result();
    }
    //-------------End for getAllAdvertisements---------------------------
    public function getAdvertisementImages($adv_id)
    {
        $result=$this->db->query("select * from advertisement_files where advertisement_id='".$adv_id."'");
        return $result->result();
    }
    public function getAllCity($state_id)
    {
        $result=$this->db->query("select * from data_city where state_id='".$state_id."' and is_active='1' order by name asc");
        return $result->result();
    }
    public function getAllLocations($city_id)
    {
        $result=$this->db->query("select * from data_location where city_id='".$city_id."' and is_active='1' order by name asc");
        return $result->result();
    }
    public function checkLogin($mobile_number,$otp)
    {
       $find=array("'",'"');
        
        $result=$this->db->query("select * from user where mobile='".$mobile_number."' and otp='".str_replace($find,"",$otp)."' and is_active='1'");
        return $result->result();
    }
    //---------------Function For check mobile number---------------------------
    public function checkMobileNumber($mobile_number)
    {
        $result=$this->db->query("select * from user where mobile='".$mobile_number."'");
        $row=$result->result();
        if(count($row)>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    //--------------------End of function for check moble number----------------
    //--------------------Function for user / mobile number registration--------
    public function registration($mobile_number)
    {
        $otp=  rand(1000, 9999);
        $data=array("mobile"=>$mobile_number,
                    "otp"=>$otp,
                    "is_email_verified"=>'1');
        $this->db->insert("user",$data);
        $id=$this->db->insert_id();

        $result_tokri_cash=$this->db->query("select * from tokri_cash where user_id='".$id."'");
        $row_tokri_cash=$result_tokri_cash->result();
        if(count($row_tokri_cash)==1)
        {
            $this->db->query("update tokri_cash set amount=amount+200 where user_id='".$id."'");
            
             //Send sms to user
                  $msg = urlencode("Congratulations! You have got Rs. 200 in your TokriWallet. You can use Rs. 50 Tokri Cash on purchases of Rs. 1200 and above.Refer us to others and get more Tokri Cash in your wallet.");
//$msg = urlencode("You have got Rs. 200 in your Tokri Wallet.You can use Rs. 100 Tokri Cash on purchases above Rs. 1000.Refer others through your App (press profile icon) to earn more Tokri Cash.");
                    $url = "http://trans.kapsystem.com/api/v3/index.php?method=sms&api_key=A474c43f4d3174a71ae8a4e7978ddacea&to=".$mobile_number."&sender=ITOKRI&message=".$msg."&format=php&custom=1,2&flash=0";
                    $c = curl_init(); 
                    curl_setopt($c, CURLOPT_URL, $url); 
                    curl_setopt($c, CURLOPT_HEADER, 1); // get the header 
                    curl_setopt($c, CURLOPT_NOBODY, 1); // and *only* get the header 
                    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); // get the response as a string from curl_exec(), rather than echoing it 
                    curl_setopt($c, CURLOPT_FRESH_CONNECT, 1); // don't use a cached version of the url 
                    if (!curl_exec($c)) { return false; } 

                    $httpcode = curl_getinfo($c, CURLINFO_HTTP_CODE); 
                    curl_close($c);
                  //End of sms  
        }
        else
        {
            $data_tokri_cash=array("user_id"=>$id,
                                    "amount"=>200,
                                    "non_promotional_amount"=>0);
            $this->db->insert("tokri_cash",$data_tokri_cash);
            
             //Send sms to user
                  $msg = urlencode("Congratulations! You have got Rs. 200 in your TokriWallet. You can use Rs. 50 Tokri Cash on purchases of Rs. 1200 and above.Refer us to others and get more Tokri Cash in your wallet.");
//$msg = urlencode("You have got Rs. 200 in your Tokri Wallet.You can use Rs. 100 Tokri Cash on purchases above Rs. 1000.Refer others through your App (press profile icon) to earn more Tokri Cash.");
                    $url = "http://trans.kapsystem.com/api/v3/index.php?method=sms&api_key=A474c43f4d3174a71ae8a4e7978ddacea&to=".$mobile_number."&sender=ITOKRI&message=".$msg."&format=php&custom=1,2&flash=0";
                    $c = curl_init(); 
                    curl_setopt($c, CURLOPT_URL, $url); 
                    curl_setopt($c, CURLOPT_HEADER, 1); // get the header 
                    curl_setopt($c, CURLOPT_NOBODY, 1); // and *only* get the header 
                    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); // get the response as a string from curl_exec(), rather than echoing it 
                    curl_setopt($c, CURLOPT_FRESH_CONNECT, 1); // don't use a cached version of the url 
                    if (!curl_exec($c)) { return false; } 

                    $httpcode = curl_getinfo($c, CURLINFO_HTTP_CODE); 
                    curl_close($c);
                  //End of sms  
        }
        
         $result=$this->db->query("select * from refer_friends where mobile_number='".$mobile_number."'");
        $row=$result->result();

        if(count($row)==0)
        {
            $refered_friend='-1';
            $data_update=array("refered_friend"=>$refered_friend);
            $this->db->where("id",$id);
            $this->db->update("user",$data_update);
        }
        
        $data1=array("id"=>$id,
                    "otp"=>$otp);
        return $data1;
    }
    //-------------------End of function for register user / mobile number------
    //--------------------Function for create new otp---------------------------
    public function createNewOtp($mobile_number)
    {
        $result=$this->db->query("select * from user where mobile='".$mobile_number."'");
        $row=$result->result();
        $otp=  rand(1000, 9999);
        $data=array("otp"=>$otp);
        $this->db->where("id",$row[0]->id);
        $this->db->update("user",$data);
        $data1=array("id"=>$row[0]->id,
                    "otp"=>$otp);
        return $data1;
    }
    //------------------------End of function for create new otp for user-------
    
    public function getPersonalDetails($user_id)
    {
        $result=$this->db->query("select * from user where id='".$user_id."'");
        return $result->result();
    }
    
    public function getPrimaryDetails($user_id)
    {
        $result=$this->db->query("select user_address.id,"
                . "user_address.address,"
                . "user_address.pincode,"
                . "user_address.is_primary_address,"
                . "data_location.name as location_name,"
                ."data_location.id as location_id,"
                . "data_city.name as city_name,"
                . "data_city.id as city_id,"
                . "data_state.name as state_name,"
                . "data_state.id as state_id "
                . "from user_address,data_location,data_city,data_state"
                . " where is_primary_address='1' "
                . "and user_id='".$user_id."' "
                . "and data_location.id=user_address.location_id "
                . "and data_city.id=user_address.city_id "
                . "and data_state.id=user_address.state_id ");
        return $result->result();
    }
    public function getPincode($location_id)
    {
        $result=$this->db->query("select data_location_pincode.pincode from data_location,data_location_pincode where data_location.id='".$location_id."' and data_location.id=data_location_pincode.location_id");
        return $result->result();
    }
    
    public function getFamilyDetails($user_id)
    {
        $result=$this->db->query("select * from family_detail where user_id='".$user_id."'");
        return $result->result();
    }
    public function checkWarehouseClosing($warehouse_id)
    {
        $todays_date=date("Y-m-d");
            $tomorrows_date=date("Y-m-d", time()+86400);
        $result=$this->db->query("select * from warehouse_closed where warehouse_id='".$warehouse_id."' and (closed_date='".$todays_date."' or closed_date='".$tomorrows_date."')");
        $row=$result->result();
        if(count($row))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

     public function get_order($user_id,$location_id)
    {
        $result=$this->db->query("select * from user_order  where user_id='".$user_id."' and location_id='".$location_id."' order by id desc");
        return $result->result();
    }

    public function get_orderdetails($id)
    {
        $result=$this->db->query("select od . * , p.is_active as product_active,p.english_name,p.special_product, s.pack_size, d.name, brand.brand_name as brand_name 
FROM order_details od 
LEFT JOIN product_details p ON od.product_id = p.id 
LEFT JOIN product_sku s ON od.sku_id = s.id 
LEFT JOIN data_product_unit d ON s.unit_id = d.id 
LEFT JOIN order_slot_details osd ON osd.id = od.order_slot_details_id 
LEFT JOIN brand ON (p.brand_id = brand.id) 
WHERE od.order_id = '".$id."' and od.combo_offer_product='0' ");
        return $result->result();
    }
    
    public function getShippingAddress($id)
    {
        $result=$this->db->query("select user_address.address,"
                . "user_address.pincode,"
                . "data_location.name as location_name,"
                . "data_city.name as city_name,"
                . "data_state.name as state_name"
                . " from user_address,data_location,data_state,data_city "
                . "where "
                . "user_address.id='".$id."' "
                . "and user_address.state_id=data_state.id "
                . "and user_address.city_id=data_city.id "
                . "and user_address.location_id=data_location.id");
        return $result->result();
    }
    
    public function cancelOrder($order_id,$user_id)
    {
        $current_time=date("Y-m-d H:i:s");  

        $k=$this->db->query("update user_order set order_status='2',cancel_time='".$current_time."',cancel_from='website' where id='".$order_id."' and user_id='".$user_id."'");
$result_ship2myid=$this->db->query("select * from shiptoordr_track where vendor_order_id='".$order_id."'");

        $access_token=$this->ship2MyIdGetAccessToken();

        $row_ship2myid= $result_ship2myid->result();
        if($k)
        {
            $this->db->query("update order_slot_details set status='4' where order_id='".$order_id."'");
             $this->db->query("update order_physical_warehouse set status='4' where order_id='".$order_id."'");
            $this->db->query("update order_details set pack_status='3' where order_id='".$order_id."'");
if(count($row_ship2myid)>0)
            {

                $url = "http://app.ship2myid.com/ship2myid/rest/order/cancel/".$row_ship2myid[0]->shiptoOrderId."?access_token=".$access_token; 
                
                $_requestUrl = $url;

                $ch = curl_init($_requestUrl);

                $headers = array("Content-Type: application/json");
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);

                if ($response) 
                {
                        $responseData = json_decode($response);
                        if (isset($responseData->ExternalOrder->id)) 
                        {
                            if ($responseData->ExternalOrder->is_order_cancelled == "true") 
                            {    
                                $this->db->query("update shiptoordr_track set is_order_cancelled='true' where shiptoOrderId='".$responseData->ExternalOrder->id."'");
                             }
                        }
                }   
            }
            return true;
        }
        else
        {
            return false;
        }
        
    }
    
    public function getDeliveredDate($order_id)
    {
        $result=$this->db->query("select max(delivery_date) as delivery_date from order_slot_details where order_id='".$order_id."'");
        return $result->result();
    }

    public function getUniqueProducts($menu_id)
    {
        $user_id=$this->session->userdata("id");
        $location_id=$this->session->userdata("location_id");//,order_slot_details.warehouse_id

            $result=$this->db->query("SELECT order_details. * , pc.menu_id
                                        FROM order_details 
                                        LEFT JOIN user_order ON order_details.order_id = user_order.id
                                        LEFT JOIN order_slot_details ON order_slot_details.id = order_details.order_slot_details_id
                                        left join product_category pc on order_details.product_id=pc.product_id
            		                    WHERE user_order.user_id = '".$user_id."'
                                        and user_order.location_id='".$location_id."'
                                        and pc.menu_id='".$menu_id."'
                                        GROUP BY order_details.sku_id,order_details.product_id");
            return $result->result();
    }
     public function getOfferStatus()
    {
        $user_id=$this->session->userdata("id");
        $query = $this->db->query("SELECT offer_used FROM user WHERE id='".$user_id."'");
        $result = $query->result();
        if(!empty($result))
        {
            return $result[0]->offer_used;
        }
        else
        {
            return 0;
        }
    }

    public function ship2MyIdGetAccessToken()
    {
            
            
                $url = "http://app.ship2myid.com/ship2myid/rest/session/signin";
                // Get username and password
                $merchantCode = 'kansal1978@gmail.com';
                $password = 'Tokri@321';
                
                // User Information
                $userInfo = array(
                    "username" => base64_encode($merchantCode),
                    "password" => base64_encode($password)
                );
                
                $jsondata = json_encode($userInfo);
                $payload['signin_details'] = base64_encode($jsondata);
                $jsonpayload = json_encode($payload);
                $_requestUrl = $url;     //. "username=" . $userInfo["username"] . "&password=" . $userInfo["password"];
                $ch = curl_init($_requestUrl);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonpayload);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($jsonpayload))
                );
                //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userInfo));
                $response = curl_exec($ch);
                //var_dump($response);
                $responseData = json_decode($response);
                $_SESSION['tokenKey'] = $responseData->Session->access_token;
                $token_key = $responseData->Session->access_token;
            
                return $token_key;
        }
    
    public function getAllCentralWarehouse()
    {
         $query = $this->db->query("SELECT *  FROM warehosuse_details WHERE is_central='1' and is_active='1'");
        return $result = $query->result();
    }
    public function getAllHomeBanner($location_id)
    {
        $query = $this->db->query("SELECT home_banner.*, group_concat(home_banner_images.image_name) as image_names, group_concat(home_banner_images.links) as links 
            FROM home_banner 
            LEFT JOIN home_banner_images ON(home_banner.id = home_banner_images.home_banner_id) 
            WHERE home_banner.is_active='1' 
            and city_id IN(SELECT city_id FROM data_location WHERE id = '".$location_id."') group by home_banner.id");
        return $result = $query->result();
}
    
}
?>
