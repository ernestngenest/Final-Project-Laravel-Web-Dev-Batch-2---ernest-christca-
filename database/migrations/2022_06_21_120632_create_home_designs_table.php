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
        Schema::create('home_designs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('home_design_quantity');
            $table->string('home_design_name');
            $table->string('home_design_description');
            $table->string('home_design_image');
            $table->string('home_design_price');
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
        Schema::dropIfExists('home_designs');
    }
};
