<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sdg_indicators', function (Blueprint $table) {
            $table->string('unit_kk')->nullable()->after('unit');
            $table->string('unit_en')->nullable()->after('unit_kk');
        });
    }

    public function down(): void
    {
        Schema::table('sdg_indicators', function (Blueprint $table) {
            $table->dropColumn(['unit_kk', 'unit_en']);
        });
    }
};

