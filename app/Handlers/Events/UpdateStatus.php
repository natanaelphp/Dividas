<?php namespace App\Handlers\Events;

use App\Events\TransactionCreated;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class UpdateStatus {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Handle the event.
	 *
	 * @param  TransactionCreated  $event
	 * @return void
	 */
	public function handle(TransactionCreated $event)
	{
		$value = $event->getTransaction()->value;
		return 'Updating...';
	}

}