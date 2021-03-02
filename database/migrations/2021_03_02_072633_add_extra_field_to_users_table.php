<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('users', function (Blueprint $table) {
			$table->string('first_name', 50);
			$table->string('last_name', 50)->nullable();
			$table->string('contact', 20)->nullable();
			$table->tinyInteger('gender');
			$table->string('user_image', 200)->nullable();
			$table->longText('address', 200);
			$table->string('city', 50)->nullable();
			$table->tinyInteger('country_id');
			$table->string('post_code', 100);
			$table->tinyInteger('role')->default(0);
			$table->tinyInteger('status')->default(0);
			$table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('users', function (Blueprint $table) {
			$table->dropColumn('first_name');
			$table->dropColumn('last_name');
			$table->dropColumn('contact');
			$table->dropColumn('gender');
			$table->dropColumn('user_image');
			$table->dropColumn('address');
			$table->dropColumn('city');
			$table->dropColumn('country_id');
			$table->dropColumn('post_code');
			$table->dropColumn('role');
			$table->dropColumn('status');
			$table->softDeletes();
		});
	}
}
