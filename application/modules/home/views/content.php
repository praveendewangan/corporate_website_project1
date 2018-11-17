
	<div class="content">
		<div class="container">
			<div class="content-mid">
			<?php for($i=0;$i<count($data['content']);$i++)
			{
				?>
				<div class="col-md-4 content-top1">
					<div class=" content-top2">
						<h4><?php echo $data['content'][$i]->heading;?></h4>
						<h6><?php echo $data['content'][$i]->sub_heading;?></h6>
						<p><?php echo $data['content'][$i]->para;?></p>
					</div>
				</div>
				<?php 
			}
			?>
				<!--<div class="col-md-4 content-mid-1">
					<div class="port effect-1">
						<div class="image-box">
							<img src="<?php //echo //base_url().'theme/frontend/images/'.$data['content'][2]->image;?>" alt="" class="img-responsive">
						</div>
						<div class="text-desc text-ed">
							<h6><?php //echo $data['content'][2]->heading;?></h6>
							<p><?php //echo $data['content'][2]->para;?></p>	
						</div>
					</div>
				</div>-->
					<div class="clearfix"></div>
			</div>
		</div>
	</div>