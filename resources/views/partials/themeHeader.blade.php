<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
$categories = Controller::categories();
// $contact = Controller::contact();
$global_settings = Controller::global_settings();
?>
<!--Header-->
<section class="main-menu-wrapper has-border fullscreen  home-menu " id="top-menu" data-transform data-from="opacity: 0, condition:home-menu" data-to="opacity:1, duration:1.4, delay:1.3, animation:Power4.easeOut, condition:home-menu">
	<header id="header" class="header header-container alt reveal">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-6 logo">
					<a href="/"><img src="/storage/logo/{{ $global_settings->logo ?? ''}}" style="width: 370px;" alt="CrossLimits factory"></a>
				</div>
				<div class="col-md-7 nav-container">
					<nav class="megamenu collapse navbar-collapse bs-navbar-collapse navbar-right mainnav col-md-10" role="navigation">
						<ul class="nav-menu">
							<li class="{{ request()->routeIs('home') ? 'selected active' : '' }}">
								<a href="{{ url('/') }}">Home</a>
							</li>
							<li class="{{ request()->routeIs('aboutus') ? 'selected active' : '' }}">
								<a href="{{ route('aboutus') }}">About Us</a>
							</li>
							<li class="{{ request()->routeIs('shop') ? 'selected active' : '' }}">
								<a href="{{ route('shop') }}">Shop</a>
							</li>
							<li class="{{ request()->routeIs('blog') ? 'selected active' : '' }}">
								<a href="{{ route('blog') }}">Blog</a>
							</li>
							<li class="{{ request()->routeIs('contactus') ? 'selected active' : '' }} "><a href="{{ route('contactus') }}">Contact us</a></li>
							@guest
							<li>
								<a href="/login">My account</a>
								<!-- <h3 class="title">Your Profile</h3> -->
								<ul class="child-nav">
									<li><a href="/login">Login</a></li>
									<li><a href="/register">Register</a></li>
								</ul>
							</li>
							@endguest
							@auth
							<li>
								<a href="#">My account</a>
								<!-- <h3 class="title">Your Profile</h3> -->
								<ul class="child-nav">
									<li><a href="about-us.html">About us</a></li>
									<li><a href="/my-profile#tabs-1">My info</a></li>
									<li><a href="/my-profile#tabs-2">My orders</a></li>
									<li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a></li>
								</ul>
							</li>
							@endauth
						</ul>
					</nav>							
				</div>
				<div class="quick-access col-md-1 col-sm-2 col-xs-4">								
					<!-- <div class="search">
						<a href="#"><i class="fa fa-search"></i></a>
						<form action="{{ route('search') }}" id="search" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="search-box">
								<input class="top-search" type="text" placeholder="Search in ur Store" name="product_name" title="Search">						
								<input class="sub-search" type="image" src="{{ asset('theme/images/search.png') }}" alt="Submit">
							</div>
						</form>										
					</div> -->
					@auth
					<div class="shopping-cart">
						<a href="/cart"><i class="fa fa-shopping-cart"></i></a>
					</div>
					@endauth
					 @guest
					<div class="shopping-cart">
						<a href="/login"><i class="fa fa-shopping-cart"></i></a>
					</div>
					@endguest 
					{{-- @auth
						<div class="shopping-cart" style="line-height: 20px">
							<a href="#"><i class="fa fa-user"></i></a>
								<div class="mini-cart product-popular">											
									<h3 class="title">Your Profile</h3>
									<ul>
										<li>
											<a href="/my-profile#tabs-1">My info</a>
										</li>
										<li>
											<a href="/my-profile#tabs-2">My orders</a>
										</li>     
										<li>
											<a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
										</li>                                               
									</ul>
								
								</div>
						</div>
					@endauth 
					@guest
						<div class="shopping-cart" style="line-height: 20px">
							<a href="/login"><i class="fa fa-user"></i></a>
								<div class="mini-cart product-popular">											
									<h3 class="title">Your Profile</h3>
									<ul>
										<li>
											<a href="/login">Login</a>
										</li>
										<li>
											<a href="/register">Register</a>
										</li>                                               
									</ul>
								
								</div>
						</div>
					@endguest --}}
					
				</div>
				<button class="menu-button" id="open-button"></button>
			</div>
		</div>
	</header>
</section>
<!--End Header-->