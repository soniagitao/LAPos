<?php namespace App\Controllers;

class MenuController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/Menu', $data);
		// return view('welcome_message');
    }

}