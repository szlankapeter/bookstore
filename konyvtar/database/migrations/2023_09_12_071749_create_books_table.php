<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });
        Book::create([
            'author' => 'Kafka',
            'title' => "Átváltozás",
            'pieces' => 20
        ]);
        Book::create([
            'author' => 'ASD',
            'title' => "DSA",
            'pieces' => 5
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
