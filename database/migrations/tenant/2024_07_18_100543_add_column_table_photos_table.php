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
        Schema::table('photos', function ($table){
            $table->foreignId('product_sku_id')
                  ->constrained('product_sku')
                  ->onDelete('cascade');
            $table->string('url');
            $table->string('alt_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::table('photos', function ($table){
            $table->dropColumn('product_sku_id');
            $table->dropColumn('url');
            $table->dropColumn('alt_text');
        });
    }
};
