<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Coalition a Corporate Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="<?php echo base_url();?>theme/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>theme/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>theme/frontend/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="<?php echo base_url();?>theme/frontend/css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="<?php echo base_url();?>theme/frontend/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'home')
{
	?>
	<div class="banner">
		<div class="container">
			<!-- <div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 456 232</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Coalition@w3layouts.com">Coalition@w3layouts.com</a></li>
					</ul>
				</div>
			</div> -->
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="<?php echo base_url();?>"><img width="31%" style="margin-top:5%;" src="<?php echo base_url().$data['logo'][0]->image;?>"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'home'){ echo 'active';}?>"><a href="<?php echo base_url();?>"><?php echo $data['menu'][0]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'about'){ echo 'active';}?>" ><a href="<?php echo base_url();?>about"><?php echo $data['menu'][1]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'services'){ echo 'active';}?>" ><a href="<?php echo base_url();?>services"><?php echo $data['menu'][2]->menu_name;?></a></li>
							<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li>-->
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'gallery'){ echo 'active';}?>" ><a href="<?php echo base_url();?>gallery"><?php echo $data['menu'][3]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'contact'){ echo 'active';}?>"><a href="<?php echo base_url();?>contact"><?php echo $data['menu'][4]->menu_name;?></a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
			<div class="wthree_banner_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
						<?php for($i=0;$i<count($data['quote']);$i++)
						{
							?>
							<li>
								<h3><?php echo $data['quote'][$i]->heading;?> </h3>
								<p><?php echo $data['quote'][$i]->para;?></p>
								<div class="agileits_more">
								</div>
							</li>
							<?php } ?>
							<!--<li>
								<h3>we generate most valuable </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								<div class="agileits_more">
								</div>
							</li>
							<li>
								<h3>we generate most valuable </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								<div class="agileits_more">
								</div>
							</li>
							<li>
								<h3>we generate most valuable </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								<div class="agileits_more">
								</div>
							</li>
							<li>
								<h3>we generate most valuable </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nibh at ligula pharetra, eu semper dui tristique. Phasellus mi sapien.</p>
								<div class="agileits_more">
								</div>
							</li>-->
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="<?php echo base_url();?>theme/frontend/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<?php }
else {?>
<!-- //banner -->


<!-- // banner for other page -->

<!-- banner -->
	<div class="banner1">
		<div class="container">
			<!--<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 456 232</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Coalition@w3layouts.com">Coalition@w3layouts.com</a></li>
					</ul>
				</div>
			</div>-->
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="<?php echo base_url();?>"><img width="31%" style="margin-top:5%;" src="<?php echo base_url().$data['logo'][0]->image;?>"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'home'){ echo 'active';}?>"><a href="<?php echo base_url();?>"><?php echo $data['menu'][0]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'about'){ echo 'active';}?>"><a href="<?php echo base_url();?>about"><?php echo $data['menu'][1]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'services'){ echo 'active';}?>" ><a href="<?php echo base_url();?>services"><?php echo $data['menu'][2]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'gallery'){ echo 'active';}?>" ><a href="<?php echo base_url();?>gallery"><?php echo $data['menu'][3]->menu_name;?></a></li>
							<li class="<?php if(isset($data['page']) && !empty($data['page']) && $data['page'] === 'contact'){ echo 'active';}?>" ><a href="<?php echo base_url();?>contact"><?php echo $data['menu'][4]->menu_name;?></a></li>
						</ul>
						
					</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<?php } ?>

<?php
if(isset($content_view) && isset($data))
{
	$this->load->view($content_view,$data);
}
?>

<!-- footer -->
	<div class="footer">
		<div class="col-md-4 footer-left-agileits">
			<h3>Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><?php echo $data['address'][0]->address;?></li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com"><?php echo $data['address'][0]->mail;?></a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo $data['address'][0]->contact;?></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-agileinfo">
			<h3>Get In Touch</h3>
			<p><?php echo $data['get_touch'][0]->heading;?></p>
				<ul class="social-icons">
					<li><a href="<?php echo $data['get_touch'][1]->url;?>" class="icon icon-border facebook"></a></li>
					<li><a href="<?php echo $data['get_touch'][2]->url;?>" class="icon icon-border twitter"></a></li>
					<li><a href="<?php echo $data['get_touch'][3]->url;?>" class="icon icon-border instagram"></a></li>
					<li><a href="<?php echo $data['get_touch'][4]->url;?>" class="icon icon-border pinterest"></a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-w3-agileits">
			<h3>Newsletter</h3>
			<p><?php echo $data['newsletter'][0]->description;?></p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Your email..." required="">
					<input type="submit" value=" ">
				</form>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer --> 
	<div class="copyright-w3-agile">
		<div class="container">
			<p>© <?php echo $data['footer'][0]->heading;?></p>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>theme/frontend/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>