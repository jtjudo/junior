@php
	/*
   * Title: Контакты
   * Description: Контакты
   * Category: Page Headers
   * Icon: admin-comments
   * Keywords: contacts
	 */

@endphp

@php
	$phone = get_field('phone');
	$мobile_network_operator = get_field('мobile_network_operator');
	$mesengers = get_field('mesenger');
	$address = get_field('address');
	$email = get_field('email');
	$working_hours= get_field('working_hours');
	$socials = get_field('socials');
	$headline = get_field('headline');
    $contact_form = get_field('contact_form');
@endphp

<section>
	<div class="container">
		<div class="contacts-background">
			<div class="contacts-content">
				<div class="contacts-content-left">
					<div class="contacts-content-left-phone">
						<h3>Телефон</h3>
						@if(!empty($phone))
							<div class="phone">
								{{$phone}}
							</div>
						@endif
						<div class="mesenger">
							@if(!empty($мobile_network_operator))
								<div class="мobile-network-operator">
									{{$мobile_network_operator}}
								</div>
							@endif
							@if(!empty($mesengers))
								@foreach($mesengers as $mesenger)
									<a href="{{$mesenger['link']['url']}}"><img src="{{$mesenger['image']['url']}}"
																				alt=""></a>
								@endforeach
							@endif
						</div>
					</div>
					<div class="contacts-content-left-address-email">
						@if(!empty($address))
							<div class="contacts-content-left-address">
								<h3>Адрес</h3>
								{{$address}}
							</div>
						@endif
						@if(!empty($email))
							<div class="contacts-content-left-email">
								<h3>E-mail</h3>
								{{$email}}
							</div>
						@endif
					</div>
					@if(!empty($working_hours))

						<div class="contacts-content-left-working-hours">
							<h3>Режим работы</h3>
							{{$working_hours}}
						</div>
					@endif
					<div class="contacts-content-left-socials">
						<h3>Присоединяйтесь к нам в социальных сетях!</h3>
						@if(!empty($socials))
							<div class="socials">
								@foreach($socials as $social)
									<a href="{{$social['link']['url']}}"><img src="{{$social['image']['url']}}"
																			  alt="">{{$social['name_social']}}</a>
								@endforeach
							</div>
						@endif
					</div>
				</div>
				<div class="contacts-content-right">
					@if(!empty($headline))

						<div class="contacts-content-right-headline">
							{{$headline}}
						</div>
					@endif
					@if(!empty($contact_form))
						<div class="contacts-content-right-forms">
							{!! $contact_form !!}
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
