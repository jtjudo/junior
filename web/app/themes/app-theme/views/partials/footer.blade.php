<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */

?>
<footer>
	@php
		$socials = get_field('social', 'option');
		$phone = get_field('phone', 'option');
		$adress =  get_field('header_adress', 'option');
		$working_hours = get_field('working_hours', 'option');
		$telegram = get_field('telegram', 'option');
		$viber = get_field('viber', 'option');
		$watsapp = get_field('watsapp', 'option');
		$data_Individual_entrepreneur = get_field('data_Individual_entrepreneur', 'option');
		$mail = get_field('mail', 'option');
	@endphp

	<div class="container">
		<div class="container-background">
			<div class="container-content">
				<div class="container-content-left">
					<p>English</p>
					@php
						wp_nav_menu([
						'menu' => 'Меню футер',
						'theme_location' => 'main_footer'
						]);
					@endphp
				</div>

				<div class="container-content-right">
					<div class="container-content-right-social">
						<p>социальные сети:</p>
						@if(!empty($socials))
							<div class="container-content-right-social-content">
								@foreach($socials as $social)
									<div class="container-content-right-social-content-wrapper">
										<a href="{{$social['link']}}"><img src="{{$social['pictures']['url']}}" alt=""></a>
									</div>
								@endforeach
							</div>
						@endif
					</div>
					<div class="container-content-right-data">
						@if(!empty($phone))
							<div class="container-content-right-data-phone">
								{{$phone}}
							</div>
						@endif
						<div class="container-content-right-data-mesengers">
							<h>МТС</h>
							@if(!empty($telegram))
								<div class="container-content-right-data-mesengers-wrapper"><img
										src="{{$telegram['image']['url']}}" alt="">
								</div>
							@endif
							@if(!empty($viber))
								<div class="container-content-right-data-mesengers-wrapper"><img
										src="{{$viber['image']['url']}}" alt="">
								</div>
							@endif
							@if(!empty($watsapp))
								<div class="container-content-right-data-mesengers-wrapper"><img
										src="{{$watsapp['image']['url']}}" alt="">
								</div>
							@endif
						</div>
						@if(!empty($adress))
							<div class="container-content-right-data-adress">
								{{$adress}}
							</div>
						@endif
						@if(!empty($working_hours))
							<div class="container-content-right-data-working_hours">
								{{$working_hours}}
							</div>
						@endif
					</div>
					<div class="container-content-right-info">
						@if(!empty($data_Individual_entrepreneur))
							<div class="container-content-right-info-IE">
								{{$data_Individual_entrepreneur['IE']}}
							</div>
						@endif
						@if(!empty($data_Individual_entrepreneur))
							<div class="container-content-right-info-adress-IE">
								{{$data_Individual_entrepreneur['adress_IE']}}
							</div>
						@endif
						@if(!empty($data_Individual_entrepreneur))
							<div class="container-content-right-info-unp">
								{{$data_Individual_entrepreneur['unp']}}
							</div>
						@endif
						@if(!empty($mail))
							<div class="container-content-right-info-mail">
								{{$mail}}
							</div>
						@endif

					</div>


				</div>
			</div>

		</div>
	</div>
</footer>

@php apply_filters( "wpemerge.partials.footer.hook", true ) && do_action('get_footer') @endphp
@php wp_footer() @endphp
</body>
</html>
