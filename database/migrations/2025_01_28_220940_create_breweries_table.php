<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('breweries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brewery_type');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('city');
            $table->string('state_province');
            $table->string('postal_code');
            $table->string('country');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('phone');
            $table->string('website_url');
            $table->string('state');
            $table->string('street');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breweries');
    }
};
