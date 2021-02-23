<?php namespace App\Controllers;

class Top extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/Top', $data);
		// return view('welcome_message');
	}
	
	//--------------------------------------------------------------------

}
