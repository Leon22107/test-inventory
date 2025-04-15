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
        Schema::create('item__stocks', function (Blueprint $table) {
            $table->id('no');
            $table->unsignedBigInteger('item_id');
            $table->decimal('qty', 10, 2);
            $table->decimal('unit_price', 10, 2);
            $table->unsignedBigInteger('vendor_id');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item__stocks');
    }
};
