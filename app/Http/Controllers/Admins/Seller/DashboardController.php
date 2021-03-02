<?php
namespace App\Http\Controllers\Admins\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('seller');

	}

	public function seller() {

		return view('authenticationValidateSeller');

	}

}
