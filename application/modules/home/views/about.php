
<!-- about -->
	<div class="about">
		<div class="container">
			<h3><?php echo $data['about1'][0]->heading;?></h3>
			<div class="about-grids">
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-left">
						<h4><?php echo $data['about2'][0]->heading;?></h4>
						<p><?php echo $data['about2'][0]->para;?></p>
					</div>
					<div class="about-grid-right">
						<span class="<?php echo $data['about2'][0]->icon;?>" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid about-one">
					<div class="about-grid-right aliquam">
						<span class="<?php echo $data['about2'][1]->icon;?>" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4><?php echo $data['about2'][1]->heading;?></h4>
						<p><?php echo $data['about2'][1]->para;?></p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid-left">
						<h4><?php echo $data['about2'][2]->heading;?></h4>
						<p><?php echo $data['about2'][2]->para;?></p>
					</div>
					<div class="about-grid-right">
						<span class="<?php echo $data['about2'][2]->icon;?>" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid-right aliquam">
						<span class="<?php echo $data['about2'][3]->icon;?>" aria-hidden="true"></span>
					</div>
					<div class="about-grid-left non">
						<h4><?php echo $data['about2'][3]->heading;?></h4>
						<p><?php echo $data['about2'][3]->para;?></p>
					</div>					
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->