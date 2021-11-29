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
		<meta http-equiv="Content-Type" content="@php bloginfo( 'html_type' ) @endphp; charset=@php bloginfo( 'charset' ) @endphp" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="@php bloginfo( 'pingback_url' ) @endphp" />

		@php wp_head() @endphp
	</head>
	<body @php body_class() @endphp>
		@php my_app_shim_wp_body_open() @endphp

		@include('views.partials.logo')


		@php
			wp_nav_menu([
				'theme_location'  => 'main_header',
				'menu'            => 'header menu',
			])

		@endphp


		@php

$adress = get_field('header_adress', 'option');
$form_application = get_field('form_application', 'option');

		@endphp
<header>
	<section class="section-header">
		<div class="container">
			<div class="header">
				<div class="header-button">


				</div>

				<div class="header-description">
					<div class="header-description-social">

					</div>

					<div class="header-description-info">
						<div class="header-description--info-adress">

						</div>

						<div class="header-description--info-working_hours">

						</div>
					</div>


					<div class="header-description-connection">
						<div class="header-description--connection-phone_number">

						</div>

						<div class="header-description--connection-messengers">

						</div>
					</div>

				<div class="header-logo">

				</div>

				<div class="header-menu">

					<div class="header-menu-language">

					</div>

				</div>

			</div>
			</div>

		</div>
	</section>
	<div class="overlay">	</div>
	<div class="form-application">
		<div class="form-application-wrapper">
			<div class="form-application-btn">
				<button>X</button>
			</div>
			{!! $form_application !!}
			</div>
	</div>
</header>
