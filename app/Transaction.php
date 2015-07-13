<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	protected $table = 'transactions';

	protected $fillable = ['value', 'description', 'id_user'];

	protected $dates = ['created_at', 'updated_at'];

	public function user()
	{
		return $this->belongsTo('App\User', 'id_user');
	}

}
