<?php

use App\Models\Lending;
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
        Schema::create('lendings', function (Blueprint $table) {
            $table->date('start')->default(now());
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('copy_id')->references('copy_id')->on('copies');
            $table->primary(['start', 'user_id', 'copy_id']);
            $table->timestamps();
        });
    
        Lending::create([
            'user_id' => 1,
            'copy_id' => 2,
        ]);

        Lending::create([
            'user_id' => 1,
            'copy_id' => 1,
        ]);

    }


    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
