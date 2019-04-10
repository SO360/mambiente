<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageDepotsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('image_depots', function (Blueprint $table) {
			$table->increments('id');
			$table->text('path');
			$table->string('slug')->unique();
			// 0 : imagen , 1 : video , 2 : documento
			$table->integer('type_id');
			$table->timestamps();
			$table->integer('status')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('image_depots');
	}
}
