<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('Teacher__Register__Datas', function (Blueprint $table) {
    //         $table->id('Tid');

    //         $table->string('name');
    //         $table->date('Dob');
    //         $table->string('phone_number');
    //         $table->string('whatsapp_number');
    //         $table->string('adhaar_number');
    //         $table->string('present_address');
    //         $table->string('permanent_address');
    //         $table->string('tuition_name');
    //         $table->string('teaching_experience');
    //         $table->string('expected_monthly_tuition_fee');
    //         $table->string('qualification');
    //         $table->string('major_subject');
    //         $table->string('subject_can_teach');
    //         $table->string('board_name');
    //         $table->string('gender');
    //         $table->string('Adhaar_image');
    //         $table->string('Degree_image');
    //         $table->string('status');
    //         $table->string('password');

    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_teacher__register__datas');
    }
};
