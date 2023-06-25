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
        Schema::create('personal_data', function (Blueprint $table) {
            $table->id();
            $table->string('commonId');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('permanent_address');
            $table->string('height');
            $table->string('sex');
            $table->string('blood_group');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('nid_number');
            $table->string('nationality');
            $table->string('signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_data');
    }
};
