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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                // Product Name
            $table->string('category');            // Category (Milk, Dahi, Paneer, etc.)
            $table->decimal('price', 8, 2);        // Price e.g. 250.50
            $table->integer('quantity');           // Available Quantity
            $table->integer('discount')->default(0); // Discount in %
            $table->text('description')->nullable(); // Product Description
            $table->string('image')->nullable();   // Image path
            $table->timestamps();                  // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
