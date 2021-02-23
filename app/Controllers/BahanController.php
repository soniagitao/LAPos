<?php namespace App\Controllers;

class BahanController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/bahan', $data);
		// return view('welcome_message');
    }
}