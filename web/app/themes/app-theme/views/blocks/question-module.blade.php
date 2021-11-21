@php
	/*
    Title: Модуль вопросов
    Description: Модуль вопросов
    Category: Page Headers
    Icon: admin-comments
    Keywords: questions-module
    */

@endphp
@php
	$Create_questions = get_field('Create_question');
	$headline = get_field('headline');
	$text_support = get_field('text_support');
    $button = get_field('button');

@endphp
<section>
	<div class="container">
		<div class="questions-module-background">
			<div class="questions-module-container">


				<div class="questions-module-headline">
					{{$headline}}
				</div>

				<div class="questions-module-content">
					@foreach($Create_questions as $question)
						<div class="questions-module-wrapper">
							<div class="questions-module-questions">
								{{$question['questions']}}
								<div class="questions-module-svh-plus">
								</div>
								<div class="questions-module-svh-minus">
								</div>
							</div>
							<div class="questions-module-answer">
								{{$question['answer']}}
							</div>
						</div>
					@endforeach
				</div>
				<div class="questions-module-text-support">
					{{$text_support}}
				</div>
				<div class="questions-module-button">
						<a href="{{$button['url']}}">{{$button['title']}}</a>
				</div>
			</div>
		</div>
	</div>
</section>
