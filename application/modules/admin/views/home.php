
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 678px;
        height: 452px;
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
						<h4 class="title2">Home</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
					</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
							<li role="presentation" class="active">
								<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Slider</a>
							</li> 
							<li role="presentation" class="">
								<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Banner-Bottom</a>
							</li>
							<li role="presentation" class="">
								<a href="#process" role="tab" id="process-tab" data-toggle="tab" aria-controls="process" aria-expanded="true">Process</a>
							</li>
							<li role="presentation" class="">
								<a href="#about" role="tab" id="about-tab" data-toggle="tab" aria-controls="about" aria-expanded="true">About</a>
							</li>
							<li role="presentation" class="">
								<a href="#services" role="tab" id="services-tab" data-toggle="tab" aria-controls="services" aria-expanded="true">Services</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content"> 
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
								<div class="form-body">
									<form id="slider-form">  
									<label>Slider 1</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="sh1" value="<?php echo $data['quote'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="sd1" value="<?php echo $data['quote'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>Slider 2</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="sh2" value="<?php echo $data['quote'][1]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="sd2" value="<?php echo $data['quote'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>Slider 3</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="sh3" value="<?php echo $data['quote'][2]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="sd3" value="<?php echo $data['quote'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>Slider 4</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="sh4" value="<?php echo $data['quote'][3]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="sd4" value="<?php echo $data['quote'][3]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>Slider 5</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="sh5" value="<?php echo $data['quote'][4]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="sd5" value="<?php echo $data['quote'][4]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
							</div> 
<script>

			$(document).ready(function() {		
					$( "#slider-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#sh1").val();
							var sh2 = $("#sh2").val();
							var sh3 = $("#sh3").val();
							var sh4 = $("#sh4").val();
							var sh5 = $("#sh5").val();
							var sd1 = $("#sd1").val();
							var sd2 = $("#sd2").val();
							var sd3 = $("#sd3").val();
							var sd4 = $("#sd4").val();
							var sd5 = $("#sd5").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_slider",
								data : {"sh1":sh1,"sh2":sh2,"sh3":sh3,"sh4":sh4,"sh5":sh5,"sd1":sd1,"sd2":sd2,"sd3":sd3,"sd4":sd4,"sd5":sd5},
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
						<div role="tabpanel" class="tab-pane fade in" id="profile" aria-labelledby="profile-tab">
								<div class="form-body">
									<form id="banner-form"> 
									<label>1</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="bh1" value="<?php echo $data['banner_bottom'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="bd1" value="<?php echo $data['banner_bottom'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>2</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="bh2" value="<?php echo $data['banner_bottom'][1]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="bd2" value="<?php echo $data['banner_bottom'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>3</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="bh3" value="<?php echo $data['banner_bottom'][2]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="bd3" value="<?php echo $data['banner_bottom'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>4</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="bh4" value="<?php echo $data['banner_bottom'][3]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="bd4" value="<?php echo $data['banner_bottom'][3]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
<script>

			$(document).ready(function() {		
					$( "#banner-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#bh1").val();
							var sh2 = $("#bh2").val();
							var sh3 = $("#bh3").val();
							var sh4 = $("#bh4").val();
							var sd1 = $("#bd1").val();
							var sd2 = $("#bd2").val();
							var sd3 = $("#bd3").val();
							var sd4 = $("#bd4").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_banner",
								data : {"sh1":sh1,"sh2":sh2,"sh3":sh3,"sh4":sh4,"sd1":sd1,"sd2":sd2,"sd3":sd3,"sd4":sd4},
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
						<div role="tabpanel" class="tab-pane fade in" id="process" aria-labelledby="process-tab">
								<div class="form-body">
									<form id="process-image-form"> 
									<div class="form-group"> 
									<label style="color:#337ab7">Images</label> 
									<div id="logo_div" style="width:100px:height:100px;display:none">
									<img id="new_logo">
									</div>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-success" onclick="image_upload()">Upload Image</a>';
									echo '<span><img id="upload_image" src="'.base_url().$data['process_con'][0]->image.'" width="100px"></span>';
									echo '</div>';
									
									echo '<div class="form-group">';
									echo '<input id="show_image_data" type="hidden" name="image_data"></input>';
									echo '</div>';
									?>
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
			
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
					$( "#process-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_process_image",
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
									<form id="process-data-form">
									<label>1</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ph1" value="<?php echo $data['process_con'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="pd1" value="<?php echo $data['process_con'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>2</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ph2" value="<?php echo $data['process_con'][1]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="pd2" value="<?php echo $data['process_con'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
<script>

			$(document).ready(function() {		
					$( "#process-data-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#ph1").val();
							var sh2 = $("#ph2").val();
							var sd1 = $("#pd1").val();
							var sd2 = $("#pd2").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_process_data",
								data : {"sh1":sh1,"sh2":sh2,"sd1":sd1,"sd2":sd2},
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
						<div role="tabpanel" class="tab-pane fade in" id="about" aria-labelledby="about-tab">
								<div class="form-body">
									<form id="about-form"> 
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label>
									<input type="text" class="form-control" id="about_heading" value="<?php echo $data['about1'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>1</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ah1" value="<?php echo $data['about2'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="ad1" value="<?php echo $data['about2'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Icon</label> 
									<input type="text" class="form-control" id="ai1" value="<?php echo $data['about2'][0]->icon;?>" placeholder="Icon" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>2</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ah2" value="<?php echo $data['about2'][1]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="ad2" value="<?php echo $data['about2'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Icon</label> 
									<input type="text" class="form-control" id="ai2" value="<?php echo $data['about2'][1]->icon;?>" placeholder="Icon" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>3</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ah3" value="<?php echo $data['about2'][2]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="ad3" value="<?php echo $data['about2'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Icon</label> 
									<input type="text" class="form-control" id="ai3" value="<?php echo $data['about2'][2]->icon;?>" placeholder="Icon" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>4</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="ah4" value="<?php echo $data['about2'][3]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="ad4" value="<?php echo $data['about2'][3]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Icon</label> 
									<input type="text" class="form-control" id="ai4" value="<?php echo $data['about2'][3]->icon;?>" placeholder="Icon" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div>  
<script>

			$(document).ready(function() {		
					$( "#about-form" ).submit(function(event) {
							event.preventDefault();
							var ah = $("#about_heading").val();
							var ah1 = $("#ah1").val();
							var ah2 = $("#ah2").val();
							var ah3 = $("#ah3").val();
							var ah4 = $("#ah4").val();
							var ad1 = $("#ad1").val();
							var ad2 = $("#ad2").val();
							var ad3 = $("#ad3").val();
							var ad4 = $("#ad4").val();
							var ai1 = $("#ai1").val();
							var ai2 = $("#ai2").val();
							var ai3 = $("#ai3").val();
							var ai4 = $("#ai4").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_about_home",
								data : {"sh":ah,"sh1":ah1,"sh2":ah2,"sh3":ah3,"sh4":ah4,"sd1":ad1,"sd2":ad2,"sd3":ad3,"sd4":ad4,"si1":ai1,"si2":ai2,"si3":ai3,"si4":ai4},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else if(result.status == 0)
									{
											document.getElementById('failed').style.display="block";
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
						<div role="tabpanel" class="tab-pane fade in" id="services" aria-labelledby="services-tab">
								<div class="form-body">
									<form id="home-service-form"> 
									<label>1</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="service_h1" value="<?php echo $data['content'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Subheading</label> 
									<input type="text" class="form-control" id="service_sh1" value="<?php echo $data['content'][0]->sub_heading;?>" placeholder="Subheading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="service_d1" value="<?php echo $data['content'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>2</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="service_h2" value="<?php echo $data['content'][1]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Subheading</label> 
									<input type="text" class="form-control" id="service_sh2" value="<?php echo $data['content'][1]->sub_heading;?>" placeholder="Subheading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="service_d2" value="<?php echo $data['content'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<label>3</label>
									<div class="form-group"> 
									<label style="color:#337ab7">Heading</label> 
									<input type="text" class="form-control" id="service_h3" value="<?php echo $data['content'][2]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Subheading</label> 
									<input type="text" class="form-control" id="service_sh3" value="<?php echo $data['content'][2]->sub_heading;?>" placeholder="Subheading" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7">Description</label> 
									<input type="text" class="form-control" id="service_d3" value="<?php echo $data['content'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
<script>

			$(document).ready(function() {		
					$( "#home-service-form" ).submit(function(event) {
							event.preventDefault();
							var ser1 = $("#service_h1").val();
							var ser2 = $("#service_sh1").val();
							var ser3 = $("#service_d1").val();
							var ser4 = $("#service_h2").val();
							var ser5 = $("#service_sh2").val();
							var ser6 = $("#service_d2").val();
							var ser7 = $("#service_h3").val();
							var ser8 = $("#service_sh3").val();
							var ser9 = $("#service_d3").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_service_home",
								data : {"sh1":ser1,"sh2":ser2,"sh3":ser3,"sh4":ser4,"sh5":ser5,"sh6":ser6,"sh7":ser7,"sh8":ser8,"sh9":ser9},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											document.getElementById('success').style.display="block";
									}
									else if(result.status == 0)
									{
											document.getElementById('failed').style.display="block";
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
					<div class="clearfix"> </div>
					</div>