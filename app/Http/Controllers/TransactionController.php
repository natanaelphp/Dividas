<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

use App\User;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
	public function index()
	{
		
	}
	
	public function create($id = NULL)
	{
		$id = (int)$id;
		$user = User::findOrFail($id);

		return View('transactions.new')->with('user', $user);
	}

	public function store(TransactionRequest $request)
	{
		print_r($request->all());
	}

	public function show($id)
	{
		
	}

	public function edit($id)
	{
		
	}

	public function update($id)
	{
		
	}

	public function destroy($id)
	{
		
	}

}
