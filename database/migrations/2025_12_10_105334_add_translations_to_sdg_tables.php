<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Для таблицы sdg_goals
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->string('title_kk')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_kk');
        });

        // Для таблицы sdg_indicators
        Schema::table('sdg_indicators', function (Blueprint $table) {
            $table->string('title_kk')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_kk');
        });
    }

    public function down(): void
    {
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->dropColumn(['title_kk', 'title_en']);
        });

        Schema::table('sdg_indicators', function (Blueprint $table) {
            $table->dropColumn(['title_kk', 'title_en']);
        });
    }
};
