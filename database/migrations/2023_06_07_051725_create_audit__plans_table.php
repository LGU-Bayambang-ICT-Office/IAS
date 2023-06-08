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
        Schema::create('audit__plans', function (Blueprint $table) {
            $table->id('ap_id');
            $table->string('audit_type', 50);
            $table->text('audit_objective');
            $table->text('audit_criteria');
            $table->text('audit_resources');
            $table->text('audit_risks');
            $table->text('audit_scope');
            $table->date('audit_date_from');
            $table->date('audit_date_to');
            $table->string('audit_qmr');
            $table->foreignID('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit__plans');
    }
};
