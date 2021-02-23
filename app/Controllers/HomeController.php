<?php namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home - Alshinky Frozen'
		];
		return view('customer/Index', $data);
		// return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
