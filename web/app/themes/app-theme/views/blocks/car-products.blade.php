@php
	/*
 	 Title: Car Products module
    Description: Car Products
    Category: Page Headers
    Icon: admin-comments
    Keywords: car-products
	 */
@endphp

@php
	$number = get_field('number');
	$headline = get_field('global_headline');
	$button = get_field('button_block');
    $global_background = get_field('global_background');
	$params = array(
		'post_type' => 'products', // тип постов - записи
		'posts_per_page' => $number, // получить 3 постa
		'order' => 'DESC', // по убыванию (сначала - свежие посты)
	);

	$posts = get_posts($params);
@endphp

<section>
	<div class="background-color" style="background-color: {!! $global_background !!}">
		<div class="container">

			<div class="global_headline">
				{!! $headline !!}
			</div>

			<div class="car-products-wrapper" style="background-color: {!! $global_background !!}">
				@foreach ($posts as $post)

					@php
						$image = get_field('image', $post->ID);
						$headline = get_field('headline', $post->ID);
						$button_car = get_field('button', $post->ID);
						$fuel_consumption = get_field('fuel_consumption', $post->ID);
                        $engine_volume = get_field('engine_volume', $post->ID);
						$transmissions = get_field('transmissions', $post->ID);
						$background = get_field('background', $post->ID);
						$price = get_field('price', $post->ID);
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


					</div>

				@endforeach

			</div>

			<div class="global_button">
				<a href="{!! $button['url'] !!}">
					<p class="button text_button">{!! $button['title'] !!}</p>
				</a>
			</div>

		</div>

	</div>


</section>
