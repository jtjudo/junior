@php
	/*
   * Title: Модуль дополнительный сервис
   * Description: Модуль дополнительный сервис
   * Category: Page Headers
   * Icon: admin-comments
   * Keywords: additional-service-module
	 */

@endphp

@php
	$headline = get_field('headline');
	$content = get_field('content');
    $
@endphp

<section>
	<div class="container">
		<div class="additional-service-background">
			<div class="additional-service-headline">
				{!! $headline !!}
			</div>
			<div class="additional-service-wrapper">
				<div class="additional-service-content">
					@foreach($content as $item)
						<div class="additional-service-content-gradient" style="width: 200px">
							<div class="additional-service-content-wrapper">
								<div class="additional-service-content-headline-description">
									{!! $item['headline_description'] !!}
								</div>
								<div class="additional-service-content-description">
									{!! $item['description'] !!}
								</div>
							</div>
						</div>

					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
