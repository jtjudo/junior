@php
	/*
 	 * Title: Галерея модуль
   	 * Description: Галерея модуль
   	 * Category: Page Headers
   	 * Icon: admin-comments
   	 * Keywords: gallery-module
	 */
@endphp

@php
	$gallery = get_field('gallery');
	$headline = get_field('headline');
@endphp
<section>
	<div class="container">
		@if(!empty($headline))
			<div class="gallery-module-content-headline">
				{{$headline}}
			</div>
		@endif
		@if(!empty($gallery))
			<div class="gallery-module">
				@foreach($gallery as $item)
					<div class="gallery-module-content">
						<img src="{{$item['url']}}" alt="">
					</div>
				@endforeach
			</div>
		@endif

	</div>
</section>
