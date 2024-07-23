<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('driver_contact');
            $table->string('driver_email');
            $table->string('driver_address');
            $table->string('driver_zip');
            $table->string('driver_state');
            $table->string('driver_district');
            $table->date('joining_date');
            $table->string('driver_salary');
            $table->string('driver_licence');
            $table->string('driver_id');
            $table->string('driver_photo');
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
        Schema::dropIfExists('drivers');
    }
}
