<?php namespace App\Controllers;

class Operasional extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/Operasional', $data);
		// return view('welcome_message');
    }

}