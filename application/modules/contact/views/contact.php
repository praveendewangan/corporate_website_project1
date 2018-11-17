
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h2 class="w3l_head w3l_head1"><?php echo $data['menu'][4]->menu_name;?></h2>
				<div class="agileits_mail_grids">
				<div class="agileits_mail_grid_left">
					<form id="contact-form">
						<h4>Your Name*</h4>
						<input type="text" id="name" name="Name" placeholder="Name..." required="">
						<h4>Your Email*</h4>
						<input type="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="Email" placeholder="Email..." required="">
						<h4>Your Phone Number*</h4>
						<input type="text" id="phone" pattern="[789][0-9]{9}" name="Phone" placeholder="Phone..." required="">
						<h4>Your Message*</h4>
						<textarea id="message" placeholder="Message..." name="Message"></textarea>
						<input type="submit" value="Send message">
					</form>
				</div>
			</div> 
<script>

			$(document).ready(function() {		
					$( "#contact-form" ).submit(function(event) {
							event.preventDefault();
							var name = $("#name").val();
							var email = $("#email").val();
							var phone = $("#phone").val();
							var message = $("#message").val();
							 $.ajax ({
								type : 'POST',
								url : "<?php echo base_url(); ?>contact/query",
								data : {"name":name,"email":email,"phone":phone,"message":message},
								datatype : 'text',
								success : function(result) {
									result = JSON.parse(result);
									if(result.status == 1)
									{
											//document.getElementById('success').style.display="block";
											alert("Your query is submitted successfully!");
									}
									else
									{
											//document.getElementById('failed').style.display="block";
											alert("Something went wrong!");
									}
								} 
							});
					});
			});
</script>		
		</div>
	</div>
<!-- //mail -->