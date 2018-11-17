
<!-- statistics -->
	<div class="statistics">
				<div class="container">
					<h3 class="w3l_head w3l_head1"><?php echo $data['about_sta'][0]->heading;?></h3>
					<div class="statistics-grids">
					<?php for($i=1;$i<count($data['about_sta']);$i++){?>
						<div class="col-md-3 statistics-grid">
							<div class="counter numscroller"><?php echo $data['about_sta'][$i]->heading;?></div>
							<h5><?php echo $data['about_sta'][$i]->para;?></h5>
						</div>
					<?php } ?>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
<!-- //statistics -->