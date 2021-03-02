<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidItemsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bid_items', function (Blueprint $table) {
			$table->id();
			$table->string('bid_title', 150);
			$table->integer('product_id');
			$table->integer('user_id');
			$table->float('starting_price');
			$table->float('bid_increment_price');
			$table->dateTime('bid_start', $precision = 0);
			$table->dateTime('bid_end', $precision = 0);
			$table->tinyInteger('status')->default(0);
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bid_items');
	}
}
