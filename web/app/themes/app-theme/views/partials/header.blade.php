<?php
/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */

?>
@php apply_filters( "wpemerge.partials.header.hook", true ) && do_action('get_header') @endphp
	<!DOCTYPE html>
<html @php language_attributes() @endphp>
<head>
	<meta http-equiv="Content-Type"
		  content="@php bloginfo( 'html_type' ) @endphp; charset=@php bloginfo( 'charset' ) @endphp"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>

	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="@php bloginfo( 'pingback_url' ) @endphp"/>

	@php wp_head() @endphp
</head>
<body @php body_class() @endphp>
@php my_app_shim_wp_body_open() @endphp




@php
	$button = get_field('button', 'option');
	$socials = get_field('social', 'option');
	$adress = get_field('header_adress', 'option');
	$hours = get_field('working_hours', 'option');
	$phone = get_field('phone', 'option');
	$telegram = get_field('telegram', 'option');
	$viber = get_field('viber', 'option');
	$watsapp = get_field('watsapp', 'option');
    $headline_form = get_field('headline', 'option');
    $form_car = get_field('form', 'option');


@endphp
<header style="background: linear-gradient(180deg, #F3F3F3 43.58%, rgba(243, 243, 243, 0.92) 100%);">
	<div class="button-modal"></div>
	<div class="modal-container">
		<div class="button-modal-output">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<path d="M0 0L24 24M24 0L0 24" stroke="#1F1F1F"/>
			</svg>
		</div>

		<div class="button-modal-decription">

			<div class="button-modal-decription-text">
				<p>{{$headline_form}}</p>
			</div>

			<div class="contact-form">
				{!! $form_car !!}
			</div>

		</div>

	</div>
	<div class="container">
		<div class="header">

			<div class="header-block-left">
				@if(!empty($button))
					<div class="header-button">
						<p class="header-button-btn">{!! $button !!}</p>
					</div>

					<div class="header-button-btn-mobile">
						<svg class="header-button-btn-mobile-modal" xmlns="http://www.w3.org/2000/svg" width="50"
							 height="50" viewBox="0 0 50 50"
							 fill="none">
							<rect width="50" height="50" rx="25" fill="#E0E0E0"/>
							<path
								d="M31.6329 28.2746L29.675 26.3208C28.9758 25.6231 27.7871 25.9022 27.5074 26.8093C27.2976 27.4373 26.5984 27.7862 25.9691 27.6466C24.5706 27.2977 22.6827 25.4835 22.3331 24.0182C22.1233 23.3902 22.5429 22.6924 23.1722 22.4831C24.0812 22.204 24.3609 21.0178 23.6616 20.3201L21.7038 18.3663C21.1444 17.8779 20.3053 17.8779 19.8158 18.3663L18.4873 19.6921C17.1588 21.0876 18.6271 24.7858 21.9135 28.0653C25.1999 31.3448 28.9059 32.8799 30.3043 31.4843L31.6329 30.1586C32.1224 29.6003 32.1224 28.763 31.6329 28.2746Z"
								fill="#1F1F1F"/>
						</svg>
					</div>
				@endif

				<div class="header-description">

					@if(!empty($socials))
						<div class="header-description-social">
							@foreach($socials as $social)
								<a href="{{$social['link']}}">
									<div class="header-description-social-picture">
										<img src="{{$social['pictures']['url']}}" alt="">
									</div>
								</a>
							@endforeach
						</div>
					@endif

					<div class="header-description-info">
						@if(!empty($adress))
							<div class="header-description-info-adress">
								<p>{{$adress}}</p>
							</div>
						@endif

						@if(!empty($hours))
							<div class="header-description-info-working_hours">
								<p>{{$hours}}</p>
							</div>
						@endif
					</div>


					<div class="header-description-connection">
						@if(!empty($phone))
							<div class="header-description-connection-phone_number">
								<p>{{$phone}}</p>
							</div>
						@endif

						<div class="header-description-connection-messengers">
							@if(!empty($telegram))
								<div class="header-description-connection-messengers-item-telegram">
									<img src="{{$telegram['image']['url']}}" alt="">
								</div>
							@endif

							@if(!empty($viber))
								<div class="header-description-connection-messengers-item-viber">
									<img src="{{$viber['image']['url']}}" alt="">
								</div>
							@endif

							@if(!empty($watsapp))
								<div class="header-description-connection-messengers-item-watsapp">
									<img src="{{$watsapp['image']['url']}}" alt="">
								</div>
							@endif

						</div>
					</div>

				</div>
			</div>

			@include('views.partials.logo')

			<div class="header-desktop">
				@php
					wp_nav_menu([
						'theme_location'  => 'main_header',
						'menu'            => 'header menu',
					])
				@endphp
			</div>

			<div class="header-mobile">
				<div class="header-burger">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
						 fill="none">
						<line x1="0.5" y1="7.5" x2="23.5" y2="7.5" stroke="#1F1F1F" stroke-linecap="round"/>
						<line x1="0.5" y1="12.5" x2="23.5" y2="12.5" stroke="#1F1F1F" stroke-linecap="round"/>
						<line x1="0.5" y1="17.5" x2="23.5" y2="17.5" stroke="#1F1F1F" stroke-linecap="round"/>
					</svg>
				</div>



			</div>
		</div>
	</div>

	<div class="burger-background">
		<div class="header-mobile-menu">
			@php
				wp_nav_menu([
					'theme_location'  => 'main_header',
					'menu'            => 'header menu',
				])
			@endphp
		</div>
		<div class="burger-description">
			<div class="burger-description-adress">
				{{$adress}}
			</div>
			<div class="burger-description-hours">
				{{$hours}}
			</div>
			<div class="header-description-connection-phone_number">
				<p>{{$phone}}</p>
			</div>
			<div class="burger-description-social">
				@foreach($socials as $social)
					<a href="{{$social['link']}}">
						<div class="burger-description-social-picture">
							<img src="{{$social['pictures']['url']}}" alt="">
						</div>
					</a>
				@endforeach
			</div>

			<div class="burger-button">
				<p class="burger-button-btn">{!! $button !!}</p>
			</div>

			<div class="burger-description-connection-messengers">
				@if(!empty($telegram))
					<div class="burger-description-connection-messengers-item-telegram">
						<img src="{{$telegram['image']['url']}}" alt="">
					</div>
				@endif

				@if(!empty($viber))
					<div class="burger-description-connection-messengers-item-viber">
						<img src="{{$viber['image']['url']}}" alt="">
					</div>
				@endif

				@if(!empty($watsapp))
					<div class="burger-description-connection-messengers-item-watsapp">
						<img src="{{$watsapp['image']['url']}}" alt="">
					</div>
				@endif
			</div>
		</div>
	</div>
</header>

