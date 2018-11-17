
<!-- about -->
	<div class="about-wthree">
			<h2 class="w3l_head w3l_head1"><?php echo $data['menu'][1]->menu_name;?></h2>
				<div class="furniture">
				<div class="container">
					<div class="furniture-grids">
						<div class="col-md-4 furniture-grid wow fadeInRight animated animated" data-wow-delay="0.4s">
							<h3><?php echo $data['about_cl1_heading'][0]->heading;?></h3>
							<?php $j=1;
							for($i=0;$i<count($data['about_cl1']);$i++){?>
							<div class="tab<?php echo $j;?>">
								<ul class="place">
									<li><img src="<?php echo base_url();?>theme/frontend/images/cir.png" alt=""></li>
									<li><?php echo $data['about_cl1'][$i]->heading;?></li>
								</ul>
							<p><?php echo $data['about_cl1'][$i]->para;?></p>
							</div>
							<?php $j++; } ?>
							
							<!--script-->
							<script>
								$(document).ready(function(){
									$(".tab1 p").hide();
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab1 ul").click(function(){
										$(".tab1 p").slideToggle(300);
										$(".tab2 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
									})
									$(".tab2 ul").click(function(){
										$(".tab2 p").slideToggle(300);
										$(".tab1 p").hide();
										$(".tab3 p").hide();
										$(".tab4 p").hide();
									})
									$(".tab3 ul").click(function(){
										$(".tab3 p").slideToggle(300);
										$(".tab4 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
									})
									$(".tab4 ul").click(function(){
										$(".tab4 p").slideToggle(300);
										$(".tab3 p").hide();
										$(".tab2 p").hide();
										$(".tab1 p").hide();
									})	
								});
							</script>
						<!-- script -->
						</div>
						<div class="col-md-8 furniture-grid1 wow fadeInLeft animated animated" data-wow-delay="0.4s">
							<h3><?php echo $data['about_cl2'][0]->heading;?></h3>
							<div class="fur-img">
								<img src="<?php echo base_url().$data['about_cl2'][0]->image;?>" class="img-responsive" alt=""/>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
			<!---Standards--->
			
		
	</div>
<!-- about -->