<?php namespace App\Http\Controllers;

use App\Status;

class HomeController extends Controller
{
	public function __construct()
	{
		
	}

	public function index()
	{
		$status = Status::find(1);

		$data = array(
			'ArrowDirection' => $status->getArrowDirection(),
			'value' 		 => $status->value
		);

		return View('home')->with($data);
	}
	
}
