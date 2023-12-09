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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classid');
            $table->unsignedBigInteger('studentid');
            $table->tinyInteger('isPresent');
            $table->string('comments', 200);
            $table->timestamps();

            $table->foreign('classid')->references('id')->on('class');
            $table->foreign('studentid')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
