<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up(): void
	{
		Schema::create('external_groups', function(Blueprint $table) {
			$table->snowflakeId();
			$table->string('domain')->unique();
			$table->string('name')->unique();
			$table->string('region')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}
	
	public function down(): void
	{
		Schema::dropIfExists('external_groups');
	}
};
