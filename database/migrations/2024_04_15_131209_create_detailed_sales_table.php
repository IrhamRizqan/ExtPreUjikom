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
        Schema::create('detailed_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sales')->index();
            $table->unsignedBigInteger('id_products')->index();
            $table->integer('quantity');
            $table->decimal('subTotal', 10, 2);
            $table->timestamps();

            $table->foreign('id_sales')->references('id')->on('sales')->onDelete('cascade');
            $table->foreign('id_products')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailed_sales');
    }
};
