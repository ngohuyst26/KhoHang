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
        Schema::create('detail_import_goods', function (Blueprint $table){
            $table->id();
            $table->foreignId('import_goods_id')
                  ->constrained('import_goods')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('product_id')
                  ->nullable()
                  ->constrained('product_sku')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->integer('qty');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('detail_import_goods');
    }
};
