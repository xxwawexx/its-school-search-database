<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSchoolInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('principal')->nullable();
            $table->string('founded')->nullable();
            $table->string('gender')->nullable();
            $table->string('agesMin')->nullable();
            $table->string('agesMax')->nullable();
            $table->string('pupils')->nullable();
            $table->string('telNos')->nullable();
            $table->string('faxNos')->nullable();
            $table->longText('website')->nullable();
            $table->string('email')->nullable();
            $table->string('curriculum')->nullable();
            $table->longText('description')->nullable();
            $table->longText('premierContent')->nullable();
            $table->longText('gmapLoc')->nullable();
            $table->string('fee_a')->nullable();
            $table->string('fee_b')->nullable();
            $table->string('fee_c')->nullable();
            $table->string('fee_d')->nullable();
            $table->string('fee_e')->nullable();
            $table->string('fee_f')->nullable();
            $table->string('fee_g')->nullable();
            $table->string('fee_h')->nullable();
            $table->longText('feesInfo')->nullable();
            $table->string('debenture')->nullable();
            $table->longText('applicationDates')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();
        });

        DB::update("ALTER TABLE school_information AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_information');
    }
}
