@php
	/*
	 Title: Модуль преимущества
    Description: Модуль преимущества
    Category: Page Headers
    Icon: admin-comments
    Keywords: benefist_module
	 */
@endphp

@php
	$headline = get_field('headline');
	$benefists = get_field('benefist');
@endphp
<section>
	<div class='container'>
		<div class='benefist-wraper'>
			<div class='benefist-headline'>

				{!! $headline !!}
			</div>
		</div>
		<div class = 'benefist-content'>
			@foreach($benefists as $benefist)
				@php
				@endphp
			@endforeach
		</div>
	</div>
</section>
