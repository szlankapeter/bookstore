<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();
            
        });
        User::create(['name'=>'Peti','email'=>"peti@gmail.com"]);
        User::create(['name'=>'Geri','email'=>"geri@gmail.com"]);
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
