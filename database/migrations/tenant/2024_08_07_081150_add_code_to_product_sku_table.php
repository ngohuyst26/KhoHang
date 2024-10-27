<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCodeToProductSkuTable extends Migration{

    public function up(){
        Schema::table('product_sku', function (Blueprint $table){
            $table->string('code')->unique()->after('id');
        });
    }

    public function down(){
        Schema::table('product_sku', function (Blueprint $table){
            $table->dropColumn('code');
        });
    }
}