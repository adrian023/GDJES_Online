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
            $table->string('email', 40);
            $table->string('password', 255);
            $table->string('lrn', 12);
            $table->string('psa_number', 10);
            $table->string('last_name', 20);
            $table->string('first_name', 30);
            $table->string('middle_name', 20);
            $table->string('extension_name', 5);
            $table->date('birth_date');
            $table->integer('age');
            $table->string('gender', 10);
            $table->boolean('is_indigenous');
            $table->string('indigenous_group', 40);
            $table->string('kinagisnang_wika', 40);
            $table->string('religion', 40);
            $table->boolean('has_special_condition');
            $table->string('special_condition', 40);
            $table->string('address', 200);
            $table->string('barangay', 10);
            $table->string('city', 20);
            $table->string('father_last_name', 20);
            $table->string('father_first_name', 30);
            $table->string('father_middle_name', 20);
            $table->string('father_cell_no', 11);
            $table->string('mother_last_name', 20);
            $table->string('mother_first_name', 30);
            $table->string('mother_middle_name', 20);
            $table->string('mother_cell_no', 11);
            $table->string('guardian_last_name', 20);
            $table->string('guardian_first_name', 30);
            $table->string('guardian_middle_name', 20);
            $table->string('guardian_cell_no', 20);
            $table->boolean('is_4p');
            $table->string('household_id', 25);
            $table->boolean('has_own_cellphone_and_tablet');
            $table->boolean('has_computer');
            $table->boolean('no_gadgets');
            $table->boolean('has_tv');
            $table->boolean('has_internet');
            $table->boolean('mobile_data_only');
            $table->string('distance_learning', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
