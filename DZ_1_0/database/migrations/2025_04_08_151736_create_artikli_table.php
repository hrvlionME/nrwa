<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('artikli', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->decimal('cijena', 8, 2);
            $table->integer('x');
            $table->integer('y');
            $table->foreignId('prodavnica_id')->constrained('prodavnice')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikli');
    }
};

