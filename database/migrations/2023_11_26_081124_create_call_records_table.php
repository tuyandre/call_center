<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('call_center_phone_id')->constrained('call_center_phones')->onDelete('cascade')->nullable();
            $table->foreignId('staff_phone_id')->constrained('staff_phones')->onDelete('cascade')->nullable();
            $table->string('client_phone');
            $table->string('client_name')->nullable();
            $table->string('type');
            $table->timestamp('date');
            $table->time('duration');
            $table->timestamps();

            //unique constraints
            $table->unique(['client_phone','date','duration','type','call_center_phone_id','staff_phone_id'],'unique_call_record');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_records');
    }
}
