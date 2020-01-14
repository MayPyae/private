<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('personal_id');
            $table->string('namem');
            $table->string('namee');
            $table->string('nrc_no');
            $table->string('dob');
            $table->string('grade');
            $table->string('subject');
            $table->string('g1_name');
            $table->string('g1_nrc');
            $table->string('g2_name');
            $table->string('g2_nrc');
            $table->string('phone');
            $table->string('address');
            $table->text('profile');
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
        Schema::dropIfExists('pre_registers');
    }
}
