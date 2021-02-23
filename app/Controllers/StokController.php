<?php namespace App\Controllers;

class StokController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/stok', $data);
		// return view('welcome_message');
    }
}