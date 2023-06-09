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
        Schema::create('assignment_clauses', function (Blueprint $table) {
            $table->id();
            $table->foreignID('apa_id')->constrained('audit_plan_assignments');
            $table->foreignID('c_id')->constrained('audit_clauses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_clauses');
    }
};
