
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 350px;
        height: 254px;
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
						<h4 class="title2">Services</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
						</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
							<li role="presentation" class="active">
								<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">1</a>
							</li> 
							<li role="presentation" class="">
								<a href="#service2" id="service2-tab" role="tab" data-toggle="tab" aria-controls="service2" aria-expanded="false">2</a>
							</li> 
							<li role="presentation" class="">
								<a href="#service3" id="service3-tab" role="tab" data-toggle="tab" aria-controls="service3" aria-expanded="false">3</a>
							</li> 
						</ul>
						<div id="myTabContent" class="tab-content"> 
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
									<label>1</label> 
								<div class="form-body">
									<form id="service1-image-form"> 
									<div class="form-group"> 
									<label>Image</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload1()">Upload Image</a>';
									echo '<span><img id="upload_image1" src="'.base_url().$data['services'][0]->image.'" width="100px"></span>';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input id="show_image_data1" type="hidden" name="image_data"></input>';
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
						  function image_upload1()
						  {
							document.getElementById('myfiles1').click();
						  }
						  function pop_up1() {
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
							<div class="image-editor1" style="padding-bottom:1%;padding-left:1%;">
							<div style="display:none">
							  <input type="file" onchange="pop_up1()" id="myfiles1" class="cropit-image-input" />
							</div>
							  <div class="cropit-preview"></div>
							  <div class="image-size-label">
								Resize image
							  </div>
							  <input type="range" class="cropit-image-zoom-input" style="width:28%;">
							  <button class="rotate-ccw" style="background:white;"><i class="fa fa-rotate-left" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>
							  <button class="rotate-cw" style="background:white;"><i class="fa fa-rotate-right" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>

							  <button class="export1">Save</button>
							</div>

							<script>
							  $(function() {
								$(".image-editor1").cropit({maxZoom:2,imageBackground:true, smallImage:'allow'});

								$(".rotate-cw").click(function() {
								  $(".image-editor1").cropit("rotateCW");
								});
								$(".rotate-ccw").click(function() {
								  $(".image-editor1").cropit("rotateCCW");
								});
						 
								 $(".export1").click(function() {
								  var imageData1 = $(".image-editor1").cropit("export");
								  $("#upload_image1").attr('src',imageData1);
								document.getElementById("id1").style.display="none";
								$("#show_image_data1").val(imageData1);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#service1-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data1").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_service1_image",
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
						<!-- **********************image crop end******************** -->
									<form id="service1-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Heading</label>
									<input type="text" class="form-control" id="sh1" value="<?php echo $data['services'][0]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="sd1" value="<?php echo $data['services'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#service1-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#sh1").val();
							var sd1 = $("#sd1").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_service1",
								data : {"sh1":sh1,"sd1":sd1},
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
							<div role="tabpanel" class="tab-pane fade in" id="service2" aria-labelledby="service2-tab">
									<label>2</label> 
								<div class="form-body">
									<form id="service2-image-form"> 
									<div class="form-group"> 
									<label>Image</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload2()">Upload Image</a>';
									echo '<span><img id="upload_image2" src="'.base_url().$data['services'][1]->image.'" width="100px"></span>';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input id="show_image_data2" type="hidden" name="image_data"></input>';
									echo '</div>';
									?>
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form>  
			
			<!--image upload-->
			<!--*****************************Image Cropper Start************************ -->
						<script>
						function display_card()
						{
							$('.dropdown-menu').toggle();
						}
						  function image_upload2()
						  {
							document.getElementById('myfiles2').click();
						  }
						  function pop_up2() {
							document.getElementById('id2').style.display='block';
							}
						  </script>
							 
						<div class="w3-container" style="background:white;">
						  <div id="id2" class="w3-modal">
							<div class="w3-modal-content w3-animate-top w3-card-4">
							  <header class="w3-container w3-teal"> 
								<span onclick="document.getElementById('id2').style.display='none'" 
								class="w3-button w3-display-topright">&times;</span>
								<h2 style="margin-bottom: 7px;">Change Profile</h2>
							  </header>
							<div class="image-editor2" style="padding-bottom:1%;padding-left:1%;">
							<div style="display:none">
							  <input type="file" onchange="pop_up2()" id="myfiles2" class="cropit-image-input" />
							</div>
							  <div class="cropit-preview"></div>
							  <div class="image-size-label">
								Resize image
							  </div>
							  <input type="range" class="cropit-image-zoom-input" style="width:28%;">
							  <button class="rotate-ccw" style="background:white;"><i class="fa fa-rotate-left" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>
							  <button class="rotate-cw" style="background:white;"><i class="fa fa-rotate-right" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>

							  <button class="export2">Save</button>
							</div>

							<script>
							  $(function() {
								$(".image-editor2").cropit({maxZoom:2,imageBackground:true, smallImage:'allow'});

								$(".rotate-cw").click(function() {
								  $(".image-editor2").cropit("rotateCW");
								});
								$(".rotate-ccw").click(function() {
								  $(".image-editor2").cropit("rotateCCW");
								});
						 
								 $(".export2").click(function() {
								  var imageData2 = $(".image-editor2").cropit("export");
								  $("#upload_image2").attr('src',imageData2);
								document.getElementById("id2").style.display="none";
								$("#show_image_data2").val(imageData2);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#service2-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data2").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_service2_image",
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
													document.getElementById("id2").style.display="none";
												});
					});
			});
</script>
							<footer class="w3-container w3-teal">
							 </footer>
							</div>
						  </div>
						</div>
						<!-- **********************image crop end******************** -->
									<form id="service2-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Heading</label>
									<input type="text" class="form-control" id="sh2" value="<?php echo $data['services'][1]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="sd2" value="<?php echo $data['services'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#service2-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#sh2").val();
							var sd1 = $("#sd2").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_service2",
								data : {"sh1":sh1,"sd1":sd1},
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
							<div role="tabpanel" class="tab-pane fade in" id="service3" aria-labelledby="service3-tab">
									<label>3</label> 
								<div class="form-body">
									<form id="service3-image-form"> 
									<div class="form-group"> 
									<label>Image</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload3()">Upload Image</a>';
									echo '<span><img id="upload_image3" src="'.base_url().$data['services'][2]->image.'" width="100px"></span>';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input id="show_image_data3" type="hidden" name="image_data"></input>';
									echo '</div>';
									?>
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form>  
			
			<!--image upload-->
			<!--*****************************Image Cropper Start************************ -->
						<script>
						function display_card()
						{
							$('.dropdown-menu').toggle();
						}
						  function image_upload3()
						  {
							document.getElementById('myfiles3').click();
						  }
						  function pop_up3() {
							document.getElementById('id3').style.display='block';
							}
						  </script>
							 
						<div class="w3-container" style="background:white;">
						  <div id="id3" class="w3-modal">
							<div class="w3-modal-content w3-animate-top w3-card-4">
							  <header class="w3-container w3-teal"> 
								<span onclick="document.getElementById('id3').style.display='none'" 
								class="w3-button w3-display-topright">&times;</span>
								<h2 style="margin-bottom: 7px;">Change Profile</h2>
							  </header>
							<div class="image-editor3" style="padding-bottom:1%;padding-left:1%;">
							<div style="display:none">
							  <input type="file" onchange="pop_up3()" id="myfiles3" class="cropit-image-input" />
							</div>
							  <div class="cropit-preview"></div>
							  <div class="image-size-label">
								Resize image
							  </div>
							  <input type="range" class="cropit-image-zoom-input" style="width:28%;">
							  <button class="rotate-ccw" style="background:white;"><i class="fa fa-rotate-left" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>
							  <button class="rotate-cw" style="background:white;"><i class="fa fa-rotate-right" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>

							  <button class="export3">Save</button>
							</div>

							<script>
							  $(function() {
								$(".image-editor3").cropit({maxZoom:2,imageBackground:true, smallImage:'allow'});

								$(".rotate-cw").click(function() {
								  $(".image-editor3").cropit("rotateCW");
								});
								$(".rotate-ccw").click(function() {
								  $(".image-editor3").cropit("rotateCCW");
								});
						 
								 $(".export3").click(function() {
								  var imageData3 = $(".image-editor3").cropit("export");
								  $("#upload_image3").attr('src',imageData3);
								document.getElementById("id3").style.display="none";
								$("#show_image_data3").val(imageData3);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#service3-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data3").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_service3_image",
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
													document.getElementById("id3").style.display="none";
												});
					});
			});
</script>
							<footer class="w3-container w3-teal">
							 </footer>
							</div>
						  </div>
						</div>
						<!-- **********************image crop end******************** -->
									<form id="service3-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Heading</label>
									<input type="text" class="form-control" id="sh3" value="<?php echo $data['services'][2]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="sd3" value="<?php echo $data['services'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#service3-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#sh3").val();
							var sd1 = $("#sd3").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_service3",
								data : {"sh1":sh1,"sd1":sd1},
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
					</div>
					<div class="clearfix"> </div>
					</div>