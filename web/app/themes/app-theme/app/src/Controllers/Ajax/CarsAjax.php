<?php

namespace MyApp\Controllers\Ajax;

use Psr\Http\Message\ResponseInterface;
use WPEmerge\Requests\Request;

class CarsAjax
{


	public function carsRequest(Request $request): ResponseInterface
	{

		$params = $request->getParsedBody();
		$postPesPage = $params['postPesPage'];

		$cars_for_label = [];
		$cars_not_label = [];

		$all_cars = $this->getAllCars(-1);
		$all_count_posts = count($all_cars);
		foreach ($all_cars as $car) {
			$label = get_field('new_car', $car->ID);

			if ($label === true) {
				$cars_for_label[] = $car;
			} else {
				$cars_not_label[] = $car;
			}
		}

		$posts = array_merge($cars_for_label, $cars_not_label);

		$cars = \MyApp::view(
			'views.partials.card-ajax-cars.cards-cars'
		)->with(['posts' => $posts, 'post_per_page' => $postPesPage, 'all_count_posts' => $all_count_posts])->toString();
		return \MyApp::json(['html' => $cars]);
	}

	public function  getAllCars ($postPerPage) {
		$arg= array(
			'post_type' => 'products', // тип постов - записи
			'posts_per_page' => $postPerPage, // получить посты (сколько в переменной)
//			'order' => 'DESC', // по убыванию (сначала - свежие посты)
		);

		return get_posts($arg);
	}

}
