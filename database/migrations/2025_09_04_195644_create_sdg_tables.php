<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sdg_goals', function (Blueprint $table) {
            $table->id();
            $table->string('code', 5); // 01, 02, 03 ...
            $table->string('title');   // Наименование цели
            $table->string('color');
            $table->timestamps();
        });

        Schema::create('sdg_indicators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('goal_id')->constrained('sdg_goals')->onDelete('cascade');
            $table->string('title');
            $table->enum('status', ['good', 'bad', 'neutral'])->nullable();
            $table->double('value', 15, 2)->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sdg_indicators');
        Schema::dropIfExists('sdg_goals');
    }
};
