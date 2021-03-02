<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->string('sku', 50);
			$table->string('product_name', 100);
			$table->smallInteger('product_type');
			$table->float('product_price');
			$table->float('product_weight')->nullable();
			$table->string('product_short_desc', 1000)->nullable();
			$table->longText('product_long_desc');
			$table->string('product_thumbnail', 100)->nullable();
			$table->string('product_image_ids', 100);
			$table->string('product_attr', 255)->nullable();
			$table->smallInteger('product_cat_id');
			$table->smallInteger('product_qty');
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
		Schema::dropIfExists('products');
	}
}
