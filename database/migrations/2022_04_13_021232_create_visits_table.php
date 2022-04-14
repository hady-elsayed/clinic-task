<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->text('diagnosis')->nullable();
            $table->text('prescription')->nullable();
            $table->text('lab_or_tests')->nullable();
            $table->unsignedBigInteger('date_id');
            $table->foreign("date_id")->references("id")->on('dates')->onDelete("cascade");
            $table->unsignedBigInteger('patient_id');
            $table->foreign("patient_id")->references("id")->on('patients')->onDelete("cascade");
            $table->unsignedBigInteger('examination_id');
            $table->foreign("examination_id")->references("id")->on('examinations')->onDelete("cascade");
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
        Schema::dropIfExists('visits');
    }
}
