<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPersonaqualification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personaqualification', function (Blueprint $table) {
            $table->increments('personQualification_id');
            $table->string('personQualification_degree');
            $table->string('personQualification_institute');
            $table->string('personQualification_cgpa');
            $table->string('personQualification_passing_year');
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
