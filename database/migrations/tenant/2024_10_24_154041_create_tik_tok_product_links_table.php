<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{

    public function up()
    : void{
        Schema::create('tiktok_product_links', function (Blueprint $table){
            $table->id();
            $table->foreignId('sku_id')->constrained('product_sku')->onDelete('cascade');
            $table->string('shop_id');
            $table->string('tiktok_product_id');
            $table->string('tiktok_product_name');
            $table->string('tiktok_sku_id')->nullable();
            $table->string('tiktok_sku_code')->nullable();
            $table->integer('price')->nullable();
            $table->string('currency', 10)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    : void{
        Schema::dropIfExists('tiktok_product_links');
    }
};