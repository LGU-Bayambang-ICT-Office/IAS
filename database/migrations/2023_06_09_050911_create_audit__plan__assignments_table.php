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
        Schema::create('audit__plan__assignments', function (Blueprint $table) {
            $table->id('apa_id');
            $table->foreignID('ap_id')->constrained('audit__plans')->onDelete('cascade');
            $table->string('area_assign');
            $table->datetime('schedule_date_from');
            $table->datetime('schedule_date_to');
            $table->string('assigned_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit__plan__assignments');
    }
};
