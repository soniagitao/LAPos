<?php namespace App\Controllers;

class Laporan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/laporan', $data);
		// return view('welcome_message');
    }
}