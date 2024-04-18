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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('child_FIO');
            $table->integer('child_id_number');
            $table->date('date_of_birth');
            $table->date('date_of_enrollment');
            $table->string('address');
            $table->string('mother_FIO');
            $table->string('mother_phone_number');
            $table->string('mother_passport_series');
            $table->string('father_FIO');
            $table->string('father_phone_number');
            $table->string('father_passport_series');
            $table->string('home_phone_number');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->string('added_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
