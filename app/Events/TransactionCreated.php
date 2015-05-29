<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

use App\Transaction;

class TransactionCreated extends Event {

	use SerializesModels;

	private $transaction;
	
	public function __construct(Transaction $transaction)
	{
		$this->transaction = $transaction;
	}

	public function getTransaction()
	{
		return $this->transaction;
	}

}
