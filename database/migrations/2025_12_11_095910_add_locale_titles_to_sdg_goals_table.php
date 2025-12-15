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
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->string('title_kk')->nullable();
            $table->string('title_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->dropColumn(['title_kk', 'title_en']);
        });
    }
};
