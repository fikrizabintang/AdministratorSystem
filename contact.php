<?php
  require_once('layout/header.php');
?>  
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
								<div class="col-md-6">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-error hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
							<div class="contact-form">
										  <form method="POST" id="contact-form" class="form-horizontal" action="contactengine.php" onSubmit="alert('Thank you for your feedback!');">
							<div class="col-sm-12">
							<div class="form-group">
							<input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
							</div>
							<div class="form-group">
							<input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
							</div>					
							<div class="form-group">
							<textarea name="Message" rows="10" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
							</div>
							</div>
						</form>		
									</div>
								</div>
								<div class="col-md-6">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	</div>
 
	</section>
<?php
  require_once('layout/footer.php');
?> 