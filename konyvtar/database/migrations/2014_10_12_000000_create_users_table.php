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
            //0: konyvtaros, 1: felhaszn
            $table->boolean('permission')->default(1);
        });
        User::create([
            'name' => 'Könyvtáros',
            'email' => "konyvtar@gmail.com",
            'password' => Hash::make('St123456'),
            'permission' => 0
        ]);

        User::create([
            'name' => 'Geri',
            'email' => "geri@gmail.com",
            'password' => Hash::make('aaa1234')
        ]);
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
