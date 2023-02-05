<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('SKU');
            $table->string('brand_name');
            $table->string('item_name');
            $table->string('external_product_id');
            $table->string('external_product_id_type');
            $table->integer('unit_count')->default(10);
            $table->string('unit_count_type');
            $table->decimal('standard_price',5,2);
            $table->integer('stock');
            $table->string('main_image_url');
            $table->charset('utf8mb4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
