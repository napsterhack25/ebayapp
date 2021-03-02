<?php
namespace App\Http\Controllers\Admins\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
