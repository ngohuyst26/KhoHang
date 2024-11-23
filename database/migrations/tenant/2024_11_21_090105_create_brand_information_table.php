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
        Schema::create('brand_information', function (Blueprint $table){
            $table->id();
            $table->string('logo')->nullable();
            $table->string('name_brand')->default('BlueTea');
            $table->string('phone')->default('0819267054');
            $table->string('email')->default('ngohuyst77@gmail.com');
            $table->text('introduction');
            $table->text('privacy_policy');
            $table->text('return_policy');
            $table->string('facebook_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('brand_information');
    }
};
