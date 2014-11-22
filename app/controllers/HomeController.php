<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index() {
		// $data = $this->initPageData();
		// return Response::view('index', $data);
		$user = Session::get('user');
		if($user) {
			return Response::view('home');
		} else {
			return Response::view('index');
		}
	}

}
