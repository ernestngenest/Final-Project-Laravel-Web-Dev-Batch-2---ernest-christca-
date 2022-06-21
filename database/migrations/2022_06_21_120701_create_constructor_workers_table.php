<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructor_workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('constructor_worker_name');
            $table->string('constructor_worker_description');
            $table->string('constructor_worker_image');
            $table->string('constructor_worker_price');
            $table->string('constructor_worker_quantity');
            $table->timestamp('last_update')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constructor_workers');
    }
};
