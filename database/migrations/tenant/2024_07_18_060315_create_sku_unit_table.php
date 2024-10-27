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
        Schema::create('sku_unit', function (Blueprint $table){
            $table->id();
            $table->foreignId('product_sku_id')
                  ->constrained('product_sku')
                  ->onDelete('cascade');

            $table->string('name');
            $table->string('exchange_value');
            $table->integer('sale_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('sku_unit');
    }
};
