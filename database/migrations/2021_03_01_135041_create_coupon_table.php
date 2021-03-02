<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('coupon', function (Blueprint $table) {
			$table->id();
			$table->integer('coupon_id');
			$table->string('coupon_name', 50);
			$table->float('coupon_discount');
			$table->dateTime('coupon_start_date', $precision = 0);
			$table->dateTime('coupon_end_date', $precision = 0);
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
		Schema::dropIfExists('coupon');
	}
}
