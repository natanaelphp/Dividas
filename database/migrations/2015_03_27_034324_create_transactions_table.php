<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('value');
			$table->string('description');
			$table->integer('id_user')->unsigned();
			$table->timestamps();
		});

		Schema::table('transactions', function(Blueprint $table)
		{
			$table->foreign('id_user')->references('id')->on('users');
		});
	}

	public function down()
	{
		Schema::drop('transactions');
	}

}
