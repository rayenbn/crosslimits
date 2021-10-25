<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
// $categories = Controller::categories();
// $contact = Controller::contact();
// $global_settings = Controller::global_settings();
?>

<!--Menu Mobile-->
<div class="menu-wrap">
	<div class="main-menu">
		<h4 class="title-menu">Main menu</h4>
		<button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
	</div>
	<ul class="nav-menu">
		<li class=" dropdown selected active">
			<a href="{{ url('/') }}">Home</a>
		</li>
		<li class="dropdown">
			<a href="{{ route('aboutus') }}">About Us</a>
		</li>
		<li class="dropdown">
		 <a href="{{ route('shop') }}">Shop</a> 
		</li>
		<li class="dropdown">
			<a href="{{ route('blog') }}">Blog</a>
		</li>
		<li><a href="{{ route('contactus') }}">Contact us</a></li>
	</ul>
</div>
<!--Menu Mobile-->