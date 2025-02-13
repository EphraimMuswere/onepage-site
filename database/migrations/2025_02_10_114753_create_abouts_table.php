<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->json('features'); // Store features as a JSON array
            $table->string('ceo_name');
            $table->string('ceo_image'); // Path to image
            $table->string('phone_number');
            $table->integer('years_of_experience');
            $table->string('image'); // Path to main about image
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('abouts');
    }
};

