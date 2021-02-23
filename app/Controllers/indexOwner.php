<?php namespace App\Controllers;

class indexOwner extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/Index', $data);
		// return view('welcome_message');
	}
	
	//--------------------------------------------------------------------

}
