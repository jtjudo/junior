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
    $buttons = get_field('button')

@endphp

<section>
	<div class="container">
		<div class="additional-service-background">

			<div class="additional-service-wrapper">
				@if(!empty($headline))
					<div class="additional-service-headline">
						{!! $headline !!}
					</div>
				@endif
				@if(!empty($content))
					<div class="additional-service-content">
						@foreach($content as $item)
							<div class="additional-service-content-wrapper">
								<div class="additional-service-content-gradient"></div>
								<div class="additional-service-content-text">
									@if(!empty($item['headline_description']))
										<div class="additional-service-content-headline-description">
											{!! $item['headline_description'] !!}
										</div>
									@endif
									@if(!empty($item['description']))
										<div class="additional-service-content-description">
											{!! $item['description'] !!}
										</div>
									@endif
								</div>
							</div>
						@endforeach
					</div>
				@endif
				@if(!empty($buttons))
					<div class="additional-service-button">
						@foreach($buttons as $button)
							@if(!empty($button['link_button'] && $button['text_button']))
								<button>
									<a href="{{$button['link_button']}}">{{$button['text_button']}}</a>
								</button>
							@endif
						@endforeach
					</div>
				@endif
			</div>
		</div>
	</div>
</section>
