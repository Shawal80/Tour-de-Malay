<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('number_of_rooms')->nullable();
            $table->string('hotel_ratings')->nullable();
            $table->string('hotel_description')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('manager_contact_number')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('status')->nullable();
            $table->dateTime('created_by')->nullable();
            $table->dateTime('updated_by')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
