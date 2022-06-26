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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('');
            $table->foreignId('category_id');
            $table->string('material_name');
            $table->text('material_description');
            $table->string('material_image');
            $table->string('material_price');
            $table->enum('status', ['Active', 'Disable'])->default('Disable');
            $table->string('material_quantity');
            $table->string('material_sold');
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
        Schema::dropIfExists('materials');
    }
};
