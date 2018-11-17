
		<div class="main-page general">
			<?php echo $this->session->flashdata('errorMessage') ?>
			<?php echo $this->session->flashdata('successMessage') ?>
					<div class="panel-info widget-shadow">
						<h4 class="title2">Dashboard</h4>
						<ul id="myTabs" class="nav nav-tabs" role="tablist"> 
							<li role="presentation" class="active">
								<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Logo</a>
							</li> 
							<li role="presentation" class="">
								<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Menus</a>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content"> 
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
								<div class="form-body">
									<form> 
									<div class="form-group"> 
									<label>Logo Image</label> 
									<input type="text" class="form-control" placeholder="ex:logo.jpg" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
							</div> 
						<div role="tabpanel" class="tab-pane fade in" id="profile" aria-labelledby="profile-tab">
								<div class="form-body">
									<form> 
									<div class="form-group"> 
									<label>1</label> 
									<input type="email" class="form-control" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>2</label> 
									<input type="email" class="form-control" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>3</label> 
									<input type="email" class="form-control" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>4</label> 
									<input type="email" class="form-control" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<div class="form-group"> 
									<label>5</label> 
									<input type="email" class="form-control" placeholder="Email" aria-describedby="inputSuccess2Status"> 
									</div> 
									<button type="submit" class="btn btn-default">Submit</button> 
									</form> 
								</div> 
						</div> 
						</div>
					</div>
					<div class="clearfix"> </div>
					</div>