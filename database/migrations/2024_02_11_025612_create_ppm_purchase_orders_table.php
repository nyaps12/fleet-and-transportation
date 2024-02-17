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
        Schema::create('ppm_purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('vcc_buyers');
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->foreignId('product_category')->constrained('svm_product_categories');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->date('date');
            $table->integer('ordered_quantity');
            $table->decimal('unit_price', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_purchase_orders');
    }
};
