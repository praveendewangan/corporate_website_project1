
	<div class="gallery">
	<div class="content">
		<div class="container">
			<h2 class="w3l_head w3l_head1"><?php echo $data['menu'][2]->menu_name;?></h2>
			<div class="content-mid">
			<?php for($i=0;$i<count($data['services']);$i++) { ?>
				<div class="col-md-4 content-mid-1">
					<div class="port effect-1">
						<div class="image-box">
							<img src="<?php echo base_url().$data['services'][$i]->image; ?>" alt="" class="img-responsive">
						</div>
						<div class="text-desc text-ed">
							<h6><?php echo $data['services'][$i]->heading;?></h6>
							<p><?php echo $data['services'][$i]->para;?></p>	
						</div>
					</div>
				</div>
			<?php } ?>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
	</div>