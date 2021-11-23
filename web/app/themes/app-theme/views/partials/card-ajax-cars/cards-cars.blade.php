

<div class="wrapper-car">

	@foreach ($posts as $key => $post)

		@if ($key + 1 <= $post_per_page)
			@php
				$image = get_field('image', $post->ID);
				$headline = get_field('headline', $post->ID);
				$button_car = get_field('button', $post->ID);
				$fuel_consumption = get_field('fuel_consumption', $post->ID);
				$engine_volume = get_field('engine_volume', $post->ID);
				$transmissions = get_field('transmissions', $post->ID);
				$background = get_field('background', $post->ID);
				$price = get_field('price', $post->ID);
				$label = get_field('new_car', $post->ID);

			@endphp

			<div class="car-products-wrapper-block">

				@if(!empty($image))
					<div class="car-products-wrapper-block-img">
						<img src="{!! $image['url'] !!}" alt="">
					</div>
				@endif

				<div class="car-products-background" style="background-color: {!! $background !!}">

					@if(!empty($headline))
						<div class="car-products-wrapper-block-subheadline">
							{!! $headline !!}
						</div>
					@endif

					<hr>

					<div class="description">

						<div class="info">
							@if(!empty($button_car))
								<div class="car-products-wrapper-block-button_car">
									<a href="{!! $button_car['url'] !!}">
										<p class="button-text">{!! $button_car['title'] !!}</p>
									</a>
								</div>
							@endif

							<div class="car-products-wrapper-block-description">

								@if(!empty($fuel_consumption))
									<div class="car-products-wrapper-block-description-fuel_consumption">
										<p>
											<span>Расход топлива:</span> {!! $fuel_consumption !!}
										</p>
									</div>
								@endif


								@if(!empty($engine_volume))
									<div class="car-products-wrapper-block-description-engine_volume">
										<p>
											<span>Объем двигателя:</span> {!! $engine_volume !!}л
										</p>
									</div>
								@endif


								@if(!empty($transmissions))
									<div class="car-products-wrapper-block-description-transmissions">
										<p>
											<span>Передача:</span> {!! $transmissions !!}
										</p>
									</div>
								@endif
							</div>
						</div>


						<div class="car-products-wrapper-block-price">
							<div class="from">от</div>
							@if(!empty($price))
								<div class="price">{!! $price !!}</div>
							@endif
							<div class="BYN">BYN</div>
						</div>

					</div>
				</div>
				@if(!empty($label))
					<div class="cars-label">
						New
					</div>
				@endif

			</div>

		@endif

	@endforeach
</div>

@if($post_per_page < $all_count_posts)
<div class="button-ajax" >
	<p class="button-ajax-cars button_style">Показать еще</p>
</div>
@endif






