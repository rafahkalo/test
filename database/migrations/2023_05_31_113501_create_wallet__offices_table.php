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
        Schema::create('wallet__offices', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->BigInteger('code')->unique();
            $table->BigInteger('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet__offices');
    }
};