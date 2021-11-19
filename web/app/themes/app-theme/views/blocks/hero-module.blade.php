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
			<div class='hero-module-image'>
				<img src="{!! $image['url'] !!}" alt="">
			</div>
			<div class='hero-module-content'>
				<div class='hero-module-headline'>
					{!! $headline !!}
				</div>
				<div class='hero-module-advantage'>
					@foreach($advantages as $advantage)
						<div class='hero-module-advantage-wrapper'>
							<div class='hero-module-circle'></div>
							<div>{!! $advantage['text_advantage'] !!}</div>
						</div>
					@endforeach
				</div>
				<div class='hero-module-button'>
					<button>
						<a href="{!! $link_btn !!}">{!! $text_btn !!}</a>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
