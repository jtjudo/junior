@php
	/*
 	Title: Car Park module
    Description: Car Park
    Category: Page Headers
    Icon: admin-comments
    Keywords: Car Park
	 */
@endphp

@php
	$headline = get_field('headline');
	$subheadline = get_field('subheadline');
	$background = get_field('background');

@endphp


<section>

	<div class="car-park-top-background" style="background-color: #EAEAEA">
		<div class="car-park-headline">
			{!! $headline !!}

		</div>

		<div class="car-park-subheadline">
			{!! $subheadline !!}
		</div>
	</div>

	<div class="car-park-background" style="background-color: {!! $background !!}">
		<div class="container">
			<div class="car-products-wrapper-ajax"></div>

		</div>

	</div>

</section>


