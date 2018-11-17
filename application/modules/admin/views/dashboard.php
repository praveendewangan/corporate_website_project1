		
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 650px;
        height: 250px;
      }

	  .cropit-preview-background {
		opacity: .2;
	  }

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input, .export {
        display: block;
      }

      button {
        margin-top: 10px;
      }
	  
	  input.cropit-image-zoom-input {
		position: relative;
	  }
	  
	  button.rotate-cw, button.export, button.rotate-ccw {
		position: relative;
	  }
	  
	#wrapper ul li.profile_id > a.dropdown-toggle{
		margin-right :77px;
		margin-top:5px;
	}
	ul .display_mobile{
		display:none;
	}
	.shadow-depth-1{
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  }
	</style>
		<div class="main-page general">
			<?php echo $this->session->flashdata('errorMessage') ?>
			<?php echo $this->session->flashdata('successMessage') ?>
					<div class="panel-info widget-shadow">
						<h4 class="title2">Dashboard</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
					</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
							<li role="presentation" class="active">
								<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Logo</a>
							</li> 
							<li role="presentation" class="">
								<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Menus</a>
							</li>
							<li role="presentation" class="">
								<a href="#map" role="tab" id="map-tab" data-toggle="tab" aria-controls="map" aria-expanded="true">Map</a>
							</li>
							<li role="presentation" class="">
								<a href="#address" role="tab" id="address-tab" data-toggle="tab" aria-controls="address" aria-expanded="true">address</a>
							</li>
							<li role="presentation" class="">
								<a href="#touch" role="tab" id="touch-tab" data-toggle="tab" aria-controls="touch" aria-expanded="true">Get In Touch</a>
							</li>
							<li role="presentation" class="">
								<a href="#news" role="tab" id="news-tab" data-toggle="tab" aria-controls="news" aria-expanded="true">News Letter</a>
							</li>
							<li role="presentation" class="">
								<a href="#footer" role="tab" id="footer-tab" data-toggle="tab" aria-controls="footer" aria-expanded="true">Footer</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content"> 
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
								<div class="form-body">
									<form id="logo-form"> 
									<div class="form-group"> 
									<label>Logo Image</label> 
									<div id="logo_div" style="width:100px:height:100px;display:none">
									<img id="new_logo">
									</div>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-success" onclick="image_upload()">Upload Image</a>';
									echo '<span><img id="upload_image" src="'.base_url().$data['logo'][0]->image.'" width="100px"></span>';
									echo '</div>';
									
									echo '<div class="form-group">';
									echo '<input id="show_image_data" type="hidden" name="image_data"></input>';
									echo '</div>';
									?>
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
							</div>
			
<script src="<?php echo base_url();?>theme/backend/js/jquery.cropit.js"></script>
			<!--image upload-->
			<!--*****************************Image Cropper Start************************ -->
						<script>
						function display_card()
						{
							$('.dropdown-menu').toggle();
						}
						  function image_upload()
						  {
							document.getElementById('myfiles').click();
						  }
						  function pop_up() {
							document.getElementById('id1').style.display='block';
							}
						  </script>
							 
						<div class="w3-container" style="background:white;">
						  <div id="id1" class="w3-modal">
							<div class="w3-modal-content w3-animate-top w3-card-4">
							  <header class="w3-container w3-teal"> 
								<span onclick="document.getElementById('id1').style.display='none'" 
								class="w3-button w3-display-topright">&times;</span>
								<h2 style="margin-bottom: 7px;">Change Profile</h2>
							  </header>
							<div class="image-editor" style="padding-bottom:1%;padding-left:1%;">
							<div style="display:none">
							  <input type="file" onchange="pop_up()" id="myfiles" class="cropit-image-input" />
							</div>
							  <div class="cropit-preview"></div>
							  <div class="image-size-label">
								Resize image
							  </div>
							  <input type="range" class="cropit-image-zoom-input" style="width:28%;">
							  <button class="rotate-ccw" style="background:white;"><i class="fa fa-rotate-left" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>
							  <button class="rotate-cw" style="background:white;"><i class="fa fa-rotate-right" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>

							  <button class="export">Save</button>
							</div>

							<script>
							  $(function() {
								$(".image-editor").cropit({maxZoom:2,imageBackground:true, smallImage:'allow'});

								$(".rotate-cw").click(function() {
								  $(".image-editor").cropit("rotateCW");
								});
								$(".rotate-ccw").click(function() {
								  $(".image-editor").cropit("rotateCCW");
								});
						 
								 $(".export").click(function() {
								  var imageData = $(".image-editor").cropit("export");
								  $("#upload_image").attr('src',imageData);
								document.getElementById("id1").style.display="none";
								$("#show_image_data").val(imageData);
								  //alert(imageData);
								 /* $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>upload_item_image",
											data: { 
												imgBase64: imageData
												}
										}).done(function(o) {
													alert(o);
													document.getElementById("id1").style.display="none"
												});*/
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#logo-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_logo",
											data: { 
												imgBase64: imageData
												}
										}).done(function(o) {
													result = JSON.parse(o);
													if(result.status == 1)
													{
															document.getElementById('success').style.display="block";
													}
													else
													{
															document.getElementById('failed').style.display="block";
													}
													//alert(o);
													document.getElementById("id1").style.display="none";
												});
					});
			});
</script>
							<footer class="w3-container w3-teal">
							 </footer>
							</div>
						  </div>
						</div>
<!-- ******************************Image Cropper end***************************** -->
						<div role="tabpanel" class="tab-pane fade in" id="profile" aria-labelledby="profile-tab">
								<div class="form-body">
									<form id="menu-form"> 
									<div class="form-group"> 
									<label>1</label> 
									<input type="text" class="form-control" id="menu1" value="<?php echo $data['menu'][0]->menu_name;?>" required="" placeholder="menu" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>2</label> 
									<input type="text" class="form-control" id="menu2" value="<?php echo $data['menu'][1]->menu_name;?>" required="" placeholder="menu" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>3</label> 
									<input type="text" class="form-control" id="menu3" value="<?php echo $data['menu'][2]->menu_name;?>" required="" placeholder="menu" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>4</label> 
									<input type="text" class="form-control" id="menu4" value="<?php echo $data['menu'][3]->menu_name;?>" required="" placeholder="menu" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>5</label> 
									<input type="text" class="form-control" id="menu5" value="<?php echo $data['menu'][4]->menu_name;?>" required="" placeholder="menu" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default" id="menu_submit">Submit</button> 
									</form> 
								</div> 
						</div>
<script>

			$(document).ready(function() {		
					$( "#menu-form" ).submit(function(event) {
							event.preventDefault();
							var menu1 = $("#menu1").val();
							var menu2 = $("#menu2").val();
							var menu3 = $("#menu3").val();
							var menu4 = $("#menu4").val();
							var menu5 = $("#menu5").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_menu",
								data : {"menu1":menu1,"menu2":menu2,"menu3":menu3,"menu4":menu4,"menu5":menu5},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>						
							<div role="tabpanel" class="tab-pane fade in" id="map" aria-labelledby="map-tab">
								<div class="form-body">
									<form id="map-form"> 
									<div class="form-group"> 
									<label>Map</label> 
									<input type="text" class="form-control" id="map_data" value="<?php echo $data['map'][0]->map;?>" placeholder="map" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
							</div>
<script>

			$(document).ready(function() {		
					$( "#map-form" ).submit(function(event) {
							event.preventDefault();
							var map = $("#map_data").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_map",
								data : {"map":map},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>							
						<div role="tabpanel" class="tab-pane fade in" id="address" aria-labelledby="profile-tab">
								<div class="form-body">
									<form id="address-form"> 
									<div class="form-group"> 
									<label>Address</label> 
									<input type="text" class="form-control" id="address_data" value="<?php echo $data['address'][0]->address;?>" placeholder="Address" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Mail</label> 
									<input type="email" class="form-control" id="mail_data" value="<?php echo $data['address'][0]->mail;?>" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Contact</label> 
									<input type="text" class="form-control" id="contact_data" value="<?php echo $data['address'][0]->contact;?>" placeholder="Contact" aria-describedby="inputSuccess2Status"> 
									</div> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div>
<script>

			$(document).ready(function() {		
					$( "#address-form" ).submit(function(event) {
							event.preventDefault();
							var address = $("#address_data").val();
							var mail = $("#mail_data").val();
							var contact = $("#contact_data").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_address",
								data : {"address":address,"mail":mail,"contact":contact},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>		 
						<div role="tabpanel" class="tab-pane fade in" id="touch" aria-labelledby="touch-tab">
								<div class="form-body">
									<form id="touch-form"> 
									<div class="form-group"> 
									<label>Description</label> 
									<input type="text" class="form-control" id="touch_data" value="<?php echo $data['get_touch'][0]->heading;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Facebook</label> 
									<input type="text" class="form-control" id="fb_data" value="<?php echo $data['get_touch'][1]->url;?>" placeholder="url" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Twitter</label> 
									<input type="text" class="form-control" id="tw_data" value="<?php echo $data['get_touch'][2]->url;?>" placeholder="url" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Instagram</label> 
									<input type="text" class="form-control" id="in_data" value="<?php echo $data['get_touch'][3]->url;?>" placeholder="url" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Pinterest</label> 
									<input type="text" class="form-control" id="pi_data" value="<?php echo $data['get_touch'][4]->url;?>" placeholder="url" aria-describedby="inputSuccess2Status"> 
									</div> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
<script>

			$(document).ready(function() {		
					$( "#touch-form" ).submit(function(event) {
							event.preventDefault();
							var touch = $("#touch_data").val();
							var facebook = $("#fb_data").val();
							var twitter = $("#tw_data").val();
							var instagram = $("#in_data").val();
							var pinterest = $("#pi_data").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_touch",
								data : {"touch":touch,"facebook":facebook,"twitter":twitter,"instagram":instagram,"pinterest":pinterest},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>		
						<div role="tabpanel" class="tab-pane fade in" id="news" aria-labelledby="news-tab">
								<div class="form-body">
									<form id="news-form"> 
									<div class="form-group"> 
									<label>Description</label> 
									<input type="text" class="form-control" id="news_data" value="<?php echo $data['newsletter'][0]->description;?>" placeholder="Newsletter" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form>
									</div>  
								</div>   
<script>

			$(document).ready(function() {		
					$( "#news-form" ).submit(function(event) {
							event.preventDefault();
							var news = $("#news_data").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_news",
								data : {"news":news},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>		
							<div role="tabpanel" class="tab-pane fade in" id="footer" aria-labelledby="footer-tab">
								<div class="form-body">
									<form id="footer-form"> 
									<div class="form-group"> 
									<label>Footer Heading</label> 
									<input type="text" class="form-control" id="fooer_data" value="<?php echo $data['footer'][0]->heading;?>" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
							</div> 
<script>

			$(document).ready(function() {		
					$( "#footer-form" ).submit(function(event) {
							event.preventDefault();
							var heading = $("#fooer_data").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_footer",
								data : {"heading":heading},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else
									{
											document.getElementById('failed').style.display="block";
									}
								} 
							});
					});
			});
</script>		
						</div> 
						</div>
					</div>
					<div class="clearfix"> </div>
					</div>