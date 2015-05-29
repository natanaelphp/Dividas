<?php namespace App\Handlers\Events;

use App\Events\TransactionCreated;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use App\Status;

class UpdateStatus {

	public function __construct()
	{
		
	}

	public function handle(TransactionCreated $event)
	{
		$transaction = $event->getTransaction();

		$half = $transaction->value / 2;

		$status = Status::find(1);

		if ($transaction->id_user == $status->receiver) {
			$status->value = $status->value + $half;
		} elseif($transaction->id_user == $status->debtor) {
			if ($half > $status->value) {
				$receiver = $status->receiver;
				$debtor   = $status->debtor;

				$status->receiver = $debtor;
				$status->debtor   = $receiver;

				$status->value = $half - $status->value;
			} else {
				$status->value = $status->value - $half;
			}
		}

		$saved = $status->save();

		return $saved;
	}

}