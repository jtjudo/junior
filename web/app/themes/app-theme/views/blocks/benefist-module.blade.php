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
			@if(!empty($headline))
				<div class='benefist-headline'>
					{!! $headline !!}
				</div>
			@endif
			@if(!empty($benefists))
				<div class='benefist-content-wrapper'>
					@foreach($benefists as $benefist)
						<div class='benefist-content'>
							<div class='benefist-content-image-background'>
								@if(!empty($benefist['image']['url']))
									<div class='benefist-content-image'>
										<img src="{!! $benefist['image']['url']!!}" alt="">
									</div>
								@endif
							</div>
							@if(!empty($benefist['description']))
								<div class='benefist-content-description'>
									{!! $benefist['description'] !!}
								</div>
							@endif
						</div>
					@endforeach
				</div>
			@endif
		</div>
	</div>
</section>
