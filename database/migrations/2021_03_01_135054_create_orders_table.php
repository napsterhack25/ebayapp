<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->integer('order_id');
			$table->string('purchased_product', 1000);
			$table->float('order_price');
			$table->string('order_ship_name', 100)->nullable();
			$table->string('order_ship_address', 1000);
			$table->string('order_ship_address2', 1000)->nullable();
			$table->string('order_state', 100);
			$table->string('order_zip', 100);
			$table->string('order_country', 100);
			$table->string('order_contact', 100);
			$table->float('order_tax');
			$table->float('order_discount');
			$table->float('order_total');
			$table->integer('coupon_id')->nullable();
			$table->string('order_email', 100);
			$table->tinyInteger('order_shipped');
			$table->dateTime('order_date', $precision = 0);
			$table->string('order_tracking_number', 100);
			$table->tinyInteger('pay_method');
			$table->tinyInteger('payment_status');
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
		Schema::dropIfExists('orders');
	}
}
