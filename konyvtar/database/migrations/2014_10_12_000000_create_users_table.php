<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Hash;

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
            $table->string('password');
            $table->boolean('permission')->default(1);
        });
        User::create(['name'=>'Peti','email'=>"peti@gmail.com", 'passowrd'=>Hash::make('A12345')]);
        User::create(['name'=>'Geri','email'=>"geri@gmail.com", 'passowrd'=>Hash::make('St123456'), 'permission'=>0]);
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }


};
