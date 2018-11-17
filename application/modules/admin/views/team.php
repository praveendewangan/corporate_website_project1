
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 250px;
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
						<h4 class="title2">Team</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
					</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist">  
							<li role="presentation" class="active">
								<a href="#team" role="tab" id="team-tab" data-toggle="tab" aria-controls="team" aria-expanded="true">Heading</a>
							</li> 
							<li role="presentation" class="">
								<a href="#team1" role="tab" id="team1-tab" data-toggle="tab" aria-controls="team1" aria-expanded="true">Member 1</a>
							</li> 
							<li role="presentation" class="">
								<a href="#team2" role="tab" id="team2-tab" data-toggle="tab" aria-controls="team2" aria-expanded="true">Member 2</a>
							</li> 
							<li role="presentation" class="">
								<a href="#team3" role="tab" id="team3-tab" data-toggle="tab" aria-controls="team3" aria-expanded="true">Member 3</a>
							</li> 
							<li role="presentation" class="">
								<a href="#team4" role="tab" id="team4-tab" data-toggle="tab" aria-controls="team4" aria-expanded="true">Member 4</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content"> 
						<div role="tabpanel" class="tab-pane fade active in" id="team" aria-labelledby="team-tab">
								<div class="form-body">
									<form id="team-heading-form"> 
									<div class="form-group"> 
									<label>Heading</label> 
									<input type="text" id="team_heading" class="form-control" value="<?php echo $data['team'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#team-heading-form" ).submit(function(event) {
							event.preventDefault();
							var heading = $("#team_heading").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_team_heading",
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
						<div role="tabpanel" class="tab-pane fade in" id="team1" aria-labelledby="team1-tab">
									<label>Member 1</label> 
								<div class="form-body">
									<form id="member1-image-form"> 
									<div class="form-group"> 
									<label>Photo</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload()">Upload Image</a>';
									echo '<span><img id="upload_image" src="'.base_url().$data['team'][1]->image.'" width="100px"></span>';
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
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#member1-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_member1_image",
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
									<form id="member1-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Name</label>
									<input type="text" class="form-control" id="mn1" value="<?php echo $data['team'][1]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="md1" value="<?php echo $data['team'][1]->description;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Facebook</label> 
									<input type="text" class="form-control" id="mf1" value="<?php echo $data['team'][1]->facebook;?>" placeholder="Facebook" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Twitter</label> 
									<input type="text" class="form-control" id="mt1" value="<?php echo $data['team'][1]->twitter;?>" placeholder="Twitter" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Instagram</label> 
									<input type="text" class="form-control" id="mi1" value="<?php echo $data['team'][1]->instagram;?>" placeholder="Instagram" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Pinterest</label> 
									<input type="text" class="form-control" id="mp1" value="<?php echo $data['team'][1]->pinterest;?>" placeholder="Pinterest" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#member1-form" ).submit(function(event) {
							event.preventDefault();
							var mn1 = $("#mn1").val();
							var md1 = $("#md1").val();
							var mf1 = $("#mf1").val();
							var mt1 = $("#mt1").val();
							var mi1 = $("#mi1").val();
							var mp1 = $("#mp1").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_member1",
								data : {"mn1":mn1,"md1":md1,"mf1":mf1,"mt1":mt1,"mi1":mi1,"mp1":mp1},
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
						<div role="tabpanel" class="tab-pane fade in" id="team2" aria-labelledby="team2-tab">
									<label>Member 2</label> 
								<div class="form-body">
									<form id="member2-image-form"> 
									<div class="form-group"> 
									<label>Photo</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload1()">Upload Image</a>';
									echo '<span><img id="upload_image1" src="'.base_url().$data['team'][2]->image.'" width="100px"></span>';
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
								  var imageData = $(".image-editor1").cropit("export");
								  $("#upload_image1").attr('src',imageData);
								document.getElementById("id2").style.display="none";
								$("#show_image_data1").val(imageData);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#member2-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data1").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_member2_image",
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
									<form id="member2-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Name</label>
									<input type="text" class="form-control" id="mn2" value="<?php echo $data['team'][2]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="md2" value="<?php echo $data['team'][2]->description;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Facebook</label> 
									<input type="text" class="form-control" id="mf2" value="<?php echo $data['team'][2]->facebook;?>" placeholder="Facebook" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Twitter</label> 
									<input type="text" class="form-control" id="mt2" value="<?php echo $data['team'][2]->twitter;?>" placeholder="Twitter" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Instagram</label> 
									<input type="text" class="form-control" id="mi2" value="<?php echo $data['team'][2]->instagram;?>" placeholder="Instagram" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Pinterest</label> 
									<input type="text" class="form-control" id="mp2" value="<?php echo $data['team'][2]->pinterest;?>" placeholder="Pinterest" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#member2-form" ).submit(function(event) {
							event.preventDefault();
							var mn1 = $("#mn2").val();
							var md1 = $("#md2").val();
							var mf1 = $("#mf2").val();
							var mt1 = $("#mt2").val();
							var mi1 = $("#mi2").val();
							var mp1 = $("#mp2").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_member2",
								data : {"mn1":mn1,"md1":md1,"mf1":mf1,"mt1":mt1,"mi1":mi1,"mp1":mp1},
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
						<div role="tabpanel" class="tab-pane fade in" id="team3" aria-labelledby="team3-tab">
									<label>Member 3</label> 
								<div class="form-body">
									<form id="member3-image-form"> 
									<div class="form-group"> 
									<label>Photo</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload2()">Upload Image</a>';
									echo '<span><img id="upload_image2" src="'.base_url().$data['team'][3]->image.'" width="100px"></span>';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input id="show_image_data2" type="hidden" name="image_data"></input>';
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
						  function image_upload2()
						  {
							document.getElementById('myfiles2').click();
						  }
						  function pop_up2() {
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
								  var imageData = $(".image-editor2").cropit("export");
								  $("#upload_image2").attr('src',imageData);
								document.getElementById("id3").style.display="none";
								$("#show_image_data2").val(imageData);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#member3-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data2").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_member3_image",
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
									<form id="member3-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Name</label>
									<input type="text" class="form-control" id="mn3" value="<?php echo $data['team'][3]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="md3" value="<?php echo $data['team'][3]->description;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Facebook</label> 
									<input type="text" class="form-control" id="mf3" value="<?php echo $data['team'][3]->facebook;?>" placeholder="Facebook" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Twitter</label> 
									<input type="text" class="form-control" id="mt3" value="<?php echo $data['team'][3]->twitter;?>" placeholder="Twitter" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Instagram</label> 
									<input type="text" class="form-control" id="mi3" value="<?php echo $data['team'][3]->instagram;?>" placeholder="Instagram" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Pinterest</label> 
									<input type="text" class="form-control" id="mp3" value="<?php echo $data['team'][3]->pinterest;?>" placeholder="Pinterest" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#member3-form" ).submit(function(event) {
							event.preventDefault();
							var mn1 = $("#mn3").val();
							var md1 = $("#md3").val();
							var mf1 = $("#mf3").val();
							var mt1 = $("#mt3").val();
							var mi1 = $("#mi3").val();
							var mp1 = $("#mp3").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_member3",
								data : {"mn1":mn1,"md1":md1,"mf1":mf1,"mt1":mt1,"mi1":mi1,"mp1":mp1},
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
						<div role="tabpanel" class="tab-pane fade in" id="team4" aria-labelledby="team4-tab">
									<label>Member 4</label> 
								<div class="form-body">
									<form id="member4-image-form"> 
									<div class="form-group"> 
									<label>Photo</label>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-primary" onclick="image_upload3()">Upload Image</a>';
									echo '<span><img id="upload_image3" src="'.base_url().$data['team'][4]->image.'" width="100px"></span>';
									echo '</div>';
									echo '<div class="form-group">';
									echo '<input id="show_image_data3" type="hidden" name="image_data"></input>';
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
						  function image_upload3()
						  {
							document.getElementById('myfiles3').click();
						  }
						  function pop_up3() {
							document.getElementById('id4').style.display='block';
							}
						  </script>
							 
						<div class="w3-container" style="background:white;">
						  <div id="id4" class="w3-modal">
							<div class="w3-modal-content w3-animate-top w3-card-4">
							  <header class="w3-container w3-teal"> 
								<span onclick="document.getElementById('id4').style.display='none'" 
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
								  var imageData = $(".image-editor3").cropit("export");
								  $("#upload_image3").attr('src',imageData);
								document.getElementById("id4").style.display="none";
								$("#show_image_data3").val(imageData);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#member4-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data3").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_member4_image",
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
													document.getElementById("id4").style.display="none";
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
									<form id="member4-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Name</label>
									<input type="text" class="form-control" id="mn4" value="<?php echo $data['team'][4]->heading;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Description</label> 
									<input type="text" class="form-control" id="md4" value="<?php echo $data['team'][4]->description;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Facebook</label> 
									<input type="text" class="form-control" id="mf4" value="<?php echo $data['team'][4]->facebook;?>" placeholder="Facebook" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Twitter</label> 
									<input type="text" class="form-control" id="mt4" value="<?php echo $data['team'][4]->twitter;?>" placeholder="Twitter" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Instagram</label> 
									<input type="text" class="form-control" id="mi4" value="<?php echo $data['team'][4]->instagram;?>" placeholder="Instagram" aria-describedby="inputSuccess2Status">
									<label style="color:#337ab7;">Pinterest</label> 
									<input type="text" class="form-control" id="mp4" value="<?php echo $data['team'][4]->pinterest;?>" placeholder="Pinterest" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#member4-form" ).submit(function(event) {
							event.preventDefault();
							var mn1 = $("#mn4").val();
							var md1 = $("#md4").val();
							var mf1 = $("#mf4").val();
							var mt1 = $("#mt4").val();
							var mi1 = $("#mi4").val();
							var mp1 = $("#mp4").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_member4",
								data : {"mn1":mn1,"md1":md1,"mf1":mf1,"mt1":mt1,"mi1":mi1,"mp1":mp1},
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