<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'status';

	public $timestamps = FALSE;

	public function getArrowDirection()
	{
		if ($this->receiver == 1) return $ArrowDirection = 'left';
		if ($this->receiver == 2) return $ArrowDirection = 'right';
	}
}
