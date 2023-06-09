<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 110)->unique();
            $table->string('type', 20);
            $table->string('image');
            $table->text('description');
            $table->string('allergens')->nullable;
            $table->string('price', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
};
