<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\User;
use App\Transaction;
use App\Http\Requests\TransactionRequest;

class TransactionController extends Controller
{
	private $transaction;

	public function __construct(Transaction $transaction)
	{
		$this->transaction = $transaction;
	}

	public function index()
	{
		
	}
	
	public function create($id = NULL)
	{
		$id = (int)$id;
		$user = User::findOrFail($id);

		return View('transactions.new')->with('user', $user);
	}

	public function store($id = NULL, TransactionRequest $request)
	{
		$inputs = $request->all();
		$inputs['id_user'] = $id;

		$this->transaction->create($inputs);
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
