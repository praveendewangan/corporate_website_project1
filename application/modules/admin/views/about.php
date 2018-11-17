
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 760px;
        height: 400px;
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
						<h4 class="title2">About</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
					</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
							<li role="presentation" class="active">
								<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Column 1</a>
							</li>
							<li role="presentation" class="">
								<a href="#column2" role="tab" id="column2-tab" data-toggle="tab" aria-controls="column2" aria-expanded="true">Column 2</a>
							</li>
							<li role="presentation" class="">
								<a href="#statistic" role="tab" id="statistic-tab" data-toggle="tab" aria-controls="statistic" aria-expanded="true">Statistics</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content"> 
						<div role="tabpanel" class="tab-pane active fade in" id="profile" aria-labelledby="profile-tab">
								<div class="form-body">
									<form id="column1-form"> 
									<div class="form-group"> 
									<label>Heading</label> 
									<input type="text" class="form-control" id="column1_heading" value="<?php echo $data['about_cl1_heading'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 1</label> 
									<input type="text" class="form-control" id="sub1" value="<?php echo $data['about_cl1'][0]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Description</label> 
									<input type="text" class="form-control" id="dec1" value="<?php echo $data['about_cl1'][0]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 2</label> 
									<input type="text" class="form-control" id="sub2" value="<?php echo $data['about_cl1'][1]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status">  
									<label>Description</label> 
									<input type="text" class="form-control" id="dec2" value="<?php echo $data['about_cl1'][1]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status">
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 3</label> 
									<input type="text" class="form-control" id="sub3" value="<?php echo $data['about_cl1'][2]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Description</label> 
									<input type="text" class="form-control" id="dec3" value="<?php echo $data['about_cl1'][2]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 4</label> 
									<input type="text" class="form-control" id="sub4" value="<?php echo $data['about_cl1'][3]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Description</label> 
									<input type="text" class="form-control" id="dec4" value="<?php echo $data['about_cl1'][3]->para;?>" placeholder="Description" aria-describedby="inputSuccess2Status"> 
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
<script>

			$(document).ready(function() {		
					$( "#column1-form" ).submit(function(event) {
							event.preventDefault();
							var heading = $("#column1_heading").val();
							var sub1 = $("#sub1").val();
							var dec1 = $("#dec1").val();
							var sub2 = $("#sub2").val();
							var dec2 = $("#dec2").val();
							var sub3 = $("#sub3").val();
							var dec3 = $("#dec3").val();
							var sub4 = $("#sub4").val();
							var dec4 = $("#dec4").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_about_column1",
								data : {"heading":heading,"sub1":sub1,"sub2":sub2,"sub3":sub3,"sub4":sub4,"dec1":dec1,"dec2":dec2,"dec3":dec3,"dec4":dec4},
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
						<div role="tabpanel" class="tab-pane fade in" id="column2" aria-labelledby="column2-tab">
								<div class="form-body">
									<form id="column2-form"> 
									<div class="form-group"> 
									<label>Heading</label> 
									<input type="text" class="form-control" id="cl2_heading" value="<?php echo $data['about_cl2'][0]->heading; ?>" placeholder="heading" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button>
									</form>
<script>

			$(document).ready(function() {		
					$( "#column2-form" ).submit(function(event) {
							event.preventDefault();
							var heading = $("#cl2_heading").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_about_column2",
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
									<form id="column2-image-form">
									<div class="form-group"> 
									<label>Image</label> 
									<div id="logo_div" style="width:100px:height:100px;display:none">
									</div>
									<?php
									echo '<div class="form-group">';
									echo '<a class="btn btn-success" onclick="image_upload()">Upload Image</a>';
									echo '<span><img id="upload_image" src="'.base_url().$data['about_cl2'][0]->image.'" width="100px"></span>';
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
					$( "#column2-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_column2_image",
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
						</div>
<!-- ******************************Image Cropper end***************************** --> 
						</div>
						<div role="tabpanel" class="tab-pane fade in" id="statistic" aria-labelledby="statistic-tab">
								<div class="form-body">
									<form id="statistic-form"> 
									<div class="form-group"> 
									<label>Heading</label> 
									<input type="text" class="form-control" id="statistic_heading" value="<?php echo $data['about_sta'][0]->heading;?>" placeholder="Heading" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 1</label> 
									<input type="text" class="form-control" id="statistic_heading1" value="<?php echo $data['about_sta'][1]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Keyword</label> 
									<input type="text" class="form-control" id="statistic_para1" value="<?php echo $data['about_sta'][1]->para;?>" placeholder="Keyword" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 2</label> 
									<input type="text" class="form-control" id="statistic_heading2" value="<?php echo $data['about_sta'][2]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status">  
									<label>Keyword</label> 
									<input type="text" class="form-control" id="statistic_para2" value="<?php echo $data['about_sta'][2]->para;?>" placeholder="Keyword" aria-describedby="inputSuccess2Status">
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 3</label> 
									<input type="text" class="form-control" id="statistic_heading3" value="<?php echo $data['about_sta'][3]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Keyword</label> 
									<input type="text" class="form-control" id="statistic_para3" value="<?php echo $data['about_sta'][3]->para;?>" placeholder="Keyword" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>Sub Heading 4</label> 
									<input type="text" class="form-control" id="statistic_heading4" value="<?php echo $data['about_sta'][4]->heading;?>" placeholder="Sub Heading" aria-describedby="inputSuccess2Status"> 
									<label>Keyword</label> 
									<input type="text" class="form-control" id="statistic_para4" value="<?php echo $data['about_sta'][4]->para;?>" placeholder="Keyword" aria-describedby="inputSuccess2Status"> 
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
<script>

			$(document).ready(function() {		
					$( "#statistic-form" ).submit(function(event) {
							event.preventDefault();
							var statistic_heading = $("#statistic_heading").val();
							var sub1 = $("#statistic_heading1").val();
							var dec1 = $("#statistic_para1").val();
							var sub2 = $("#statistic_heading2").val();
							var dec2 = $("#statistic_para2").val();
							var sub3 = $("#statistic_heading3").val();
							var dec3 = $("#statistic_para3").val();
							var sub4 = $("#statistic_heading4").val();
							var dec4 = $("#statistic_para4").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_statistic",
								data : {"heading":statistic_heading,"sub1":sub1,"sub2":sub2,"sub3":sub3,"sub4":sub4,"dec1":dec1,"dec2":dec2,"dec3":dec3,"dec4":dec4},
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
					<div class="clearfix"> </div>
					</div>