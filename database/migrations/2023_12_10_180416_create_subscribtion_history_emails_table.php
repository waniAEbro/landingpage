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
        Schema::create('subscribtion_history_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribtion_id')->constrained()->onDelete("cascade");
            $table->string("content");
            $table->string("attachment");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribtion_history_emails');
    }
};
