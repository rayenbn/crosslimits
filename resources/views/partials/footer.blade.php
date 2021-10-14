<?php

use App\Http\Controllers\Controller;

$footer = Controller::footer();
$global_settings =Controller::global_settings();
// $categories =Controller::footer_categories();

?>
<!--Footer-->
<footer class="page-footer">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 infomation">
					<div class="copy-right">
						<div class="footer-right">
							<div class="line1">Copyright &copy; 2021<a href="http://crooslimits.com">CrossLimits.com </a> . All Rights Reserved.</div>
							<div class="line2">Designed and development by <a href="http://digitafro.com">Digitafro </a></div>
						</div>
					</div>
					<div class="social_icon">
						@if (isset($footer->fb))
						<a href="{{ $footer->youtube }}"><i class="fa fa-youtube"></i></a>
						@endif
						@if (isset($footer->fb))
						<a href="{{ $footer->fb }}"><i class="fa fa-facebook"></i></a>
						@endif
						@if (isset($footer->ig))
						<a href="{{ $footer->ig }}"><i class="fa fa-instagram"></i></a>
						@endif
						@if (isset($footer->twitter))
						<a href="{{ $footer->twitter }}"><i class="fa fa-twitter"></i></a>
						@endif
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 location">							
					<div class="footer-title">
						<h4>Our location</h4>			
					</div>
					<div class="address">
						{!! $footer->address ?? '' !!}
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 send-mail">							
					<div class="footer-title">
						<h4>Keep in touch</h4>			
					</div>
					<form name="" method="post"  id="send-mail">												
						<div class="info">Lorem ipsum dolor sit amet, consectetur adi sollicitud ante tellus ornare mi, et mollis</div>						
						<div class="email">
							<input type="text" title="E-mail" name="user[email]" class="inputbox" placeholder="Your email" >
							<button class="button" title="Submit" type="submit"><i class="fa fa-arrow-right"></i></button>
						</div>
					</form>
				</div>						
			</div>
		</div>
	</section>
</footer>
<!--End Footer-->