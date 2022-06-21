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
        Schema::create('interior_designs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('interior_design_name');
            $table->string('interior_design_description');
            $table->string('interior_design_image');
            $table->string('interior_design_price');
            $table->string('interior_design_quantity');
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
        Schema::dropIfExists('interior_designs');
    }
};
