@php
	/* title: Информационный модуль
	 * Description: Информационный модуль
	 * Icon: admin-site
	 * Keywords: information-module
	 * Category: new
	 */
@endphp
@php
	$headline = get_field('headline');
	$content = get_field('content');
	$subheadline = get_field('subheadline');
	$info_text = get_field('info_text');
	$button = get_field('button');
    $background = get_field('background');

@endphp

	<section style="background-image: url({{$background['url']}});  background-repeat: no-repeat; background-size: cover;">
	<div class="container" >
			<div class="information-module">
				@if(!empty($headline))
					<div class="information-module-headline">
						{{$headline}}
					</div>
				@endif
				<div class="information-module-wrapper">
					@if(!empty($content))
						<div class="information-module-content">
							@foreach($content as $key => $item)
								<ul>
									<li>
										<span>{{$key+1}}.</span>
										{{$item['content_text']}}
									</li>
								</ul>
							@endforeach
						</div>
					@endif
					@if(!empty($subheadline))
						<div class="information-module-subheadline">
							{{$subheadline}}
						</div>
					@endif
					@if(!empty($info_text))
						<div class="information-module-info-text">
							{{$info_text}}
						</div>
					@endif
					@if(!empty($button))
						<div class="information-module-button">
							<button>
								<a href="{{$button['url']}}">{{$button['title'] ?? 'Кнопка'}}</a>
							</button>
						</div>
					@endif
				</div>
			</div>
	</div>
	</section>
