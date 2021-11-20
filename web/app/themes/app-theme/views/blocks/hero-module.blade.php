@php
	/*
 	 * Title: Главный модуль
   	 * Description: Главный модуль
   	 * Category: Page Headers
   	 * Icon: admin-comments
   	 * Keywords: hero-module
	 */
@endphp
@php
	$image = get_field('image');
	$headline = get_field('headline');
	$advantages = get_field('advantage');
    $text_btn = get_field('text_btn');
    $link_btn = get_field('link_btn')
@endphp
<section>
	<div class='container'>
		<div class='hero-module-wrapper'>
			@if(!empty($image))
			<div class='hero-module-image' style="background-image: {!! $image['url'] !!}">
			</div>
			@endif
			<div class='hero-module-content'>
				@if(!empty($headline))
					<div class='hero-module-headline'>
						{!! $headline !!}
					</div>
				@endif
				@if(!empty($advantages))
					<div class='hero-module-advantage'>
						@foreach($advantages as $advantage)
							<div class='hero-module-advantage-wrapper'>
								<div class='hero-module-circle'></div>
								<div>{!! $advantage['text_advantage'] !!}</div>
							</div>
						@endforeach
					</div>
				@endif
				@if(!empty($link_btn && $text_btn))
					<div class='hero-module-button'>
						<button>
							<a href="{!! $link_btn !!}">{!! $text_btn !!}</a>
						</button>
					</div>
				@endif
			</div>
		</div>
	</div>
</section>
