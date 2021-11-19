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
		<div class='benefist-wrapper'>
			<div class='benefist-headline'>
				{!! $headline !!}
			</div>

			<div class='benefist-content-wrapper'>
				@foreach($benefists as $benefist)
					<div class='benefist-content'>
						<div class='benefist-content-image-background'>
							<div class='benefist-content-image'>
								<img src="{!! $benefist['image']['url']!!}" alt="">
							</div>
						</div>
						<div class='benefist-content-description'>
							{!! $benefist['description'] !!}
						</div>

					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
