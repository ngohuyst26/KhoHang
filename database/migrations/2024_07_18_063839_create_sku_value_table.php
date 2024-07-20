<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    /**
     * Run the migrations.
     */
    public function up()
    : void{
        Schema::create('sku_value', function (Blueprint $table){
            $table->id();
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onDelete('cascade');

            $table->foreignId('sku_id')
                  ->constrained('product_sku')
                  ->onDelete('cascade');

            $table->foreignId('option_id')
                  ->constrained('options')
                  ->onDelete('restrict');

            $table->foreignId('option_value_id')
                  ->constrained('option_value')
                  ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('sku_value');
    }
};
