<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallCenterPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_center_phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->string('phone_type');
            $table->string('phone_status');
            $table->string('phone_location')->nullable();
            $table->string('phone_description')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number');
            $table->timestamps();

            //unique keys
            $table->unique(['phone_number', 'serial_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_center_phones');
    }
}
