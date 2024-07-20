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
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->foreignId('category_id')
                  ->constrained()
                  ->onDelete('restrict');

            $table->foreignId('brand_id')
                  ->constrained('brands')
                  ->onDelete('restrict');

            $table->foreignId('supplier_id')
                  ->constrained('suppliers')
                  ->onDelete('restrict');

            $table->string('name');
            $table->string('description');
            $table->tinyInteger('status')
                  ->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('products');
    }
};
