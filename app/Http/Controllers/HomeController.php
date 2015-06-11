<?php namespace App\Http\Controllers;

use Request, Hash, Mail, Carbon\Carbon, Session;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$app_name = 'Creative Junkiez';
		// if(Session::has('user_id')){
		// 	return redirect('gameon');
		// }else{
			return view('index')->with('app_name',$app_name);
		// }
	}

}
