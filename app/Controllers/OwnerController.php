<?php namespace App\Controllers;

class OwnerController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		$users = new indexOwner();
		return view('owner/index', $data);
		// return view('welcome_message');
	}
	
	//--------------------------------------------------------------------

}
