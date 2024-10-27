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
        Schema::create('product_sku_location', function (Blueprint $table){
            $table->id();
            $table->foreignId('product_sku_id')
                  ->constrained('product_sku')
                  ->onDelete('cascade');

            $table->foreignId('storage_location_id')
                  ->constrained('storage_location')
                  ->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('sku_location');
    }
};
