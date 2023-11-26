<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_phones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('call_center_staff_id')->constrained('call_center_staff')->onDelete('cascade');
            $table->foreignId('call_center_phone_id')->constrained('call_center_phones')->onDelete('cascade');
            $table->string('phone_status')->default('active');
            $table->dateTime('assigned_at')->nullable();
            $table->dateTime('returned_at')->nullable();
            $table->unsignedBigInteger('assigned_by')->nullable();
            $table->timestamps();

            //foreign keys
            $table->foreign('assigned_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_phones');
    }
}
