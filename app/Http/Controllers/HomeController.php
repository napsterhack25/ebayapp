<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		return view('home');
	}

	public function authenticationValidateAdmin() {

		return view('authenticationValidateAdmin');

	}

	public function authenticationValidateUser() {

		return view('authenticationValidateUser');

	}

	public function authenticationValidateSeller() {

		return view('authenticationValidateSeller');

	}

}
