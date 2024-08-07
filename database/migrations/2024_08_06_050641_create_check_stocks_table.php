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
        Schema::create('check_stocks', function (Blueprint $table){
            $table->id();
            $table->integer('ac_number')->default(0);
            $table->integer('ac_total')->default(0);
            $table->integer('total_difference')->default(0);
            $table->integer('qty_increased')->default(0);
            $table->integer('qty_decreased')->default(0);
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('check_stocks');
    }
};
