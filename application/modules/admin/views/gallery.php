
<script src="<?php echo base_url();?>theme/backend/js/jquery.cropit.js"></script>
	<style>
	

      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 640px;
        height: 426px;
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
						<h4 class="title2">Gallery</h4>
						<div class="panel panel-success" id="success" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Successfull!</h3></div>
						</div>
						<div class="panel panel-danger" id="failed" style="display:none;"> <div class="panel-heading"> <h3 class="panel-title">Upload Failed!</h3> </div></div>
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<?php for($i=1;$i<13;$i++)
							{
								?>
							<li role="presentation" class="<?php if($i==1){echo "active";}?>">
								<a href="#image<?php echo $i;?>" id="image<?php echo $i;?>-tab" role="tab" data-toggle="tab" aria-controls="image<?php echo $i;?>" aria-expanded="false">Image<?php echo $i;?></a>
							</li>
							<?php
							}
							?>
						</ul>
						<div id="myTabContent" class="tab-content">
								<?php $i=0;
								for($j=1;$j<13;$j++)
								{
									?>
							<div role="tabpanel" class="tab-pane fade <?php if($j==1){echo 'active';}?> in" id="image<?php echo $j;?>" aria-labelledby="image<?php echo $j;?>-tab">
									<label><?php echo $j;?></label> 
								<div class="form-body">
									<form id="gallery<?php echo $j;?>-image-form"> 
									<div class="form-group"> 
									<label>Image</label>
									<div class="form-group">
									<a class="btn btn-primary" onclick="image_upload<?php echo $j;?>()">Upload Image</a>
									<span><img id="upload_image<?php echo $j;?>" src="<?php echo base_url().$data['gallery'][$i]->image;?>" width="100px"></span>
									</div>
									<div class="form-group">
									<input id="show_image_data<?php echo $j;?>" type="hidden" name="image_data"></input>
									</div>
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
						  function image_upload<?php echo $j;?>()
						  {
							document.getElementById('myfiles<?php echo $j;?>').click();
						  }
						  function pop_up<?php echo $j;?>() {
							document.getElementById('id<?php echo $j;?>').style.display='block';
							}
						  </script>
							 
						<div class="w3-container" style="background:white;">
						  <div id="id<?php echo $j;?>" class="w3-modal">
							<div class="w3-modal-content w3-animate-top w3-card-4">
							  <header class="w3-container w3-teal"> 
								<span onclick="document.getElementById('id<?php echo $j;?>').style.display='none'" 
								class="w3-button w3-display-topright">&times;</span>
								<h2 style="margin-bottom: 7px;">Change Profile</h2>
							  </header>
							<div class="image-editor<?php echo $j;?>" style="padding-bottom:1%;padding-left:1%;">
							<div style="display:none">
							  <input type="file" onchange="pop_up<?php echo $j;?>()" id="myfiles<?php echo $j;?>" class="cropit-image-input" />
							</div>
							  <div class="cropit-preview"></div>
							  <div class="image-size-label">
								Resize image
							  </div>
							  <input type="range" class="cropit-image-zoom-input" style="width:28%;">
							  <button class="rotate-ccw" style="background:white;"><i class="fa fa-rotate-left" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>
							  <button class="rotate-cw" style="background:white;"><i class="fa fa-rotate-right" style="font-size:25px;color:#009688;padding-top: 3px;"></i></button>

							  <button class="export<?php echo $j;?>">Save</button>
							</div>

							<script>
							  $(function() {
								$(".image-editor<?php echo $j;?>").cropit({maxZoom:2,imageBackground:true, smallImage:'allow'});

								$(".rotate-cw").click(function() {
								  $(".image-editor<?php echo $j;?>").cropit("rotateCW");
								});
								$(".rotate-ccw").click(function() {
								  $(".image-editor<?php echo $j;?>").cropit("rotateCCW");
								});
						 
								 $(".export<?php echo $j;?>").click(function() {
								  var imageData<?php echo $j;?> = $(".image-editor<?php echo $j;?>").cropit("export");
								  $("#upload_image<?php echo $j;?>").attr('src',imageData<?php echo $j;?>);
								document.getElementById("id<?php echo $j;?>").style.display="none";
								$("#show_image_data<?php echo $j;?>").val(imageData<?php echo $j;?>);
								});  
							  });
							  
							</script>
<script>
			$(document).ready(function() {		
					$( "#gallery<?php echo $j;?>-image-form" ).submit(function(event) {
							event.preventDefault();
							var imageData = $("#show_image_data<?php echo $j;?>").val();
								 $.ajax({
											type: "POST",
											url: "<?php echo base_url();?>admin/submit_gallery_image/<?php echo $j;?>",
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
													document.getElementById("id<?php echo $j;?>").style.display="none";
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
									<form id="gallery<?php echo $j;?>-form"> 
									<div class="form-group">
									<label style="color:#337ab7;">Description</label>
									<input type="text" class="form-control" id="gd<?php echo $j;?>" value="<?php echo $data['gallery'][$i]->description;?>" placeholder="Name" aria-describedby="inputSuccess2Status"> 
									<label style="color:#337ab7;">Title</label> 
									<input type="text" class="form-control" id="gt<?php echo $j;?>" value="<?php echo $data['gallery'][$i]->title;?>" placeholder="Description" aria-describedby="inputSuccess2Status">
									</div>  
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
<script>

			$(document).ready(function() {		
					$( "#gallery<?php echo $j;?>-form" ).submit(function(event) {
							event.preventDefault();
							var sh1 = $("#gd<?php echo $j;?>").val();
							var sd1 = $("#gt<?php echo $j;?>").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>admin/submit_gallery/<?php echo $j;?>",
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
							<?php
								$i++;}
								?>							
						</div>
					</div>
					<div class="clearfix"> </div>
					</div>