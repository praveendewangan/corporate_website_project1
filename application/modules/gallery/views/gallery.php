
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="w3l_head w3l_head1"><?php echo $data['menu'][3]->menu_name;?></h2>
			<div class="wthree_gallery_grids">
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt=" " />
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<span id="jzBoxMoreItems">
							<div id="jzBoxCounter"></div>
							<i class="arrow-left" id="jzBoxPrev"></i> 
							<i class="arrow-right" id="jzBoxNext"></i> 
						</span>
						<i class="close" id="jzBoxClose"></i>
					</div>
				</div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="#furnitures" role="tab" id="furnitures-tab" data-toggle="tab" aria-controls="furnitures" style="visibility: hidden;">Category</a></li>
						<li role="presentation"><a href="#rooms" role="tab" id="rooms-tab" data-toggle="tab" aria-controls="rooms" style="visibility: hidden;">Category-1</a></li>
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
						<li role="presentation" style="visibility: hidden;"><a href="#services" role="tab" id="services-tab" data-toggle="tab" aria-controls="services">Category-2</a></li>
						<li role="presentation"><a href="#buildings" role="tab" id="buildings-tab" data-toggle="tab" aria-controls="buildings" style="visibility: hidden;">Category-3</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tab_img">
							<?php for($i=0;$i<count($data['gallery_con']);$i++)
							{ ?>
								<div class="col-md-3 agile_gallery_grids">
									<a href="<?php echo base_url().$data['gallery_con'][$i]->image;?>" class="jzBoxLink" title="<?php echo $data['gallery_con'][$i]->title;?>">
										<div class="view view-sixth">
											<img src="<?php echo base_url().$data['gallery_con'][$i]->image;?>" alt=" " class="img-responsive" />
											<div class="mask">
												<p><?php echo $data['gallery_con'][$i]->description;?></p>
											</div>
										</div>
									</a>
								</div>
							<?php 
							if($i == 3)
							{
								break;
							}
							}
							?>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
							<?php for($i=4;$i<count($data['gallery_con']);$i++)
							{ ?>
								<div class="col-md-3 agile_gallery_grids">
									<a href="<?php echo base_url().$data['gallery_con'][$i]->image;?>" class="jzBoxLink" title="<?php echo $data['gallery_con'][$i]->title;?>">
										<div class="view view-sixth">
											<img src="<?php echo base_url().$data['gallery_con'][$i]->image;?>" alt=" " class="img-responsive" />
											<div class="mask">
												<p><?php echo $data['gallery_con'][$i]->description;?></p>
											</div>
										</div>
									</a>
								</div>
							<?php 
							if($i == 7)
							{
								break;
							}
							}
							?>
								<div class="clearfix"> </div>
							</div>
							<div class="tab_img">
							<?php for($i=8;$i<count($data['gallery_con']);$i++)
							{ ?>
								<div class="col-md-3 agile_gallery_grids">
									<a href="<?php echo base_url().$data['gallery_con'][$i]->image;?>" class="jzBoxLink" title="<?php echo $data['gallery_con'][$i]->title;?>">
										<div class="view view-sixth">
											<img src="<?php echo base_url().$data['gallery_con'][$i]->image;?>" alt=" " class="img-responsive" />
											<div class="mask">
												<p><?php echo $data['gallery_con'][$i]->description;?></p>
											</div>
										</div>
									</a>
								</div>
							<?php 
							if($i == 11)
							{
								break;
							}
							}
							?>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="<?php echo base_url();?>theme/frontend/js/jzBox.js"></script>
		</div>
	</div>
<!-- //gallery -->