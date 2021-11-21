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


@endphp

<section>
	<div class="container">
		<div class="information-module-background">
			<div class="information-module">
				<div class="information-module-headline">
					{{$headline}}
				</div>
				<div class="information-module-wrapper">


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
					<div class="information-module-subheadline">
						{{$subheadline}}
					</div>
					<div class="information-module-info-text">
						{{$info_text}}
					</div>
					<div class="information-module-button">
						<button>
							<a href="{{$button['url']}}">{{$button['title']}}</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
