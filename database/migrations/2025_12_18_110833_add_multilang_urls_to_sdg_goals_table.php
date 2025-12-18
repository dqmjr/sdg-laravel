<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->string('url')->nullable()->after('title_en');
            $table->string('url_kk')->nullable()->after('url');
            $table->string('url_en')->nullable()->after('url_kk');
        });
    }

    public function down()
    {
        Schema::table('sdg_goals', function (Blueprint $table) {
            $table->dropColumn(['url','url_kk', 'url_en']);
        });
    }
};
