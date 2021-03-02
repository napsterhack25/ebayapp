<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('admin');
	}

	public function superAdmin() {

		return view('authenticationValidateAdmin');

	}

}
