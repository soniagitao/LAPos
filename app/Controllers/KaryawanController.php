<?php namespace App\Controllers;

class KaryawanController extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Owner - Alshinky Frozen'
		];
		return view('owner/Karyawan', $data);
		// return view('welcome_message');
    }

	//--------------------------------------------------------------------

}
