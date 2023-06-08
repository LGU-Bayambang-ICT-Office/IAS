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
        Schema::create('audit__clauses', function (Blueprint $table) {
            $table->id('c_id');
            $table->integer('clause_no');
            $table->string('clause_sub_no')->nullable();
            $table->string('clause_desc');
            $table->string('clause_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit__clauses');
    }
};
