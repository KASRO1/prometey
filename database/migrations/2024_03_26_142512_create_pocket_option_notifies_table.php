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
        Schema::create('pocket_option_notifies', function (Blueprint $table) {
            $table->id();
            $table->string('reg')->nullable();
            $table->string('conf')->nullable();
            $table->string('ftd')->nullable();
            $table->string('dep')->nullable();
            $table->string('click_id')->nullable();
            $table->string('site_id')->nullable();
            $table->string('trader_id')->nullable();
            $table->decimal('sumdep', 8, 2)->nullable();
            $table->string('a')->nullable();
            $table->string('ac')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pocket_option_notifies');
    }
};
