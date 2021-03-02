<?php
namespace App\Http\Controllers\Admins\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('buyer');

	}

	public function buyer() {

		return view('authenticationValidateUser');

	}

}
