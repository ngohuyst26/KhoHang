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
        Schema::create('detail_check_stocks', function (Blueprint $table){
            $table->id();
            $table->foreignId('check_stock_id')
                  ->constrained('check_stocks')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('product_sku_id')
                  ->nullable()
                  ->constrained('product_sku')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->integer('stock')->default(0);
            $table->integer('ac_number')->default(0);
            $table->integer('total_difference')->default(0);
            $table->integer('value')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('detail_check_stocks');
    }
};
