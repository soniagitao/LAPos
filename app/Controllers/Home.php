<?php namespace App\Controllers;

class Home extends BaseController
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
