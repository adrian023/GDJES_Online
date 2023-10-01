<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->year('schoolYear');  //QUESTION ABOUT THIS: DI BA DAPAT ITO SY LIKE 2014 - 2016
            $table->string('psaBirthCertificateNo', 50);
            $table->boolean('lrnStatus');
            $table->bigInteger('lrn');   //QUESTION: POSSIBLE BA NA ANG LRN AY MAGSIMULA SA 0? KASI MAG EERROR SIYA PAG PWEDE SINCE NUMBER YUNG DATATYPE
            $table->string('lastName', 50);
            $table->string('firstName', 50);
            $table->string('middleName', 50);
            $table->string('extensionName', 5);
            $table->date('birthDate');
            $table->float('age');
            $table->string('gender', 10);
            $table->boolean('isIndigineous');
            $table->string('indigeneousGroup', 50);
            $table->string('motherTongue', 50);
            $table->string('religion', 50);
            $table->boolean('needSpecialAssistance');
            $table->string('specialAssistanceNeeds');
            $table->string('houseNumber', 10); // QUESTION: DAPAT AT STRING TALAGA ITO, SINCE MAY MGA 204-B  or 103C na house numbers
            $table->string('street', 50);
            $table->string('barangay', 10);
            $table->string('municipality', 50);
            $table->string('province', 50);
            $table->string('region', 50);
            $table->unsignedBigInteger('relativesID');
            $table->foreign('relativesID')->references('id')->on('relatives');
            $table->unsignedBigInteger('householdID');
            $table->foreign('householdID')->references('id')->on('households');
            $table->unsignedBigInteger('learningInfoID');
            $table->foreign('learningInfoID')->references('id')->on('learning_info');
            $table->string('distanceLearning', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
