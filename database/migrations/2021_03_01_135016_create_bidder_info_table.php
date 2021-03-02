<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidderInfoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bidder_info', function (Blueprint $table) {
			$table->id();
			$table->integer('bid_item_id');
			$table->float('bid_price');
			$table->integer('bid_user_id');
			$table->tinyInteger('bid_status');
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
		Schema::dropIfExists('bidder_info');
	}
}
