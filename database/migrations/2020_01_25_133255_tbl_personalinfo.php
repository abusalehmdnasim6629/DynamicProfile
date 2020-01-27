<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPersonalinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personalinfo', function (Blueprint $table) {
            $table->increments('info_id');
            $table->string('person_first_name');
            $table->string('person_last_name');
            $table->string('person_designation');
            $table->string('person_career_goal');
            $table->string('person_image');
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
        //
    }
}
