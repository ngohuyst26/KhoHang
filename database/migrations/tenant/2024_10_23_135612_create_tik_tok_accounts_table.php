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
        Schema::create('tik_tok_accounts', function (Blueprint $table){
            $table->id();
            $table->string('account_tiktok_name')->nullable();
            $table->string('access_token')->nullable();
            $table->string('refresh_token')->nullable();
            $table->string('expires_in')->nullable();
            $table->string('shop_cipher')->nullable();
            $table->string('shop_id')->nullable();
            $table->string('open_id')->nullable();
            $table->string('auth_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('tik_tok_accounts');
    }
};
