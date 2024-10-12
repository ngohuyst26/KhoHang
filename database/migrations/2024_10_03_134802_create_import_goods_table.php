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
        Schema::create('import_goods', function (Blueprint $table){
            $table->id();
            $table->foreignId('supplier_id')
                  ->nullable()
                  ->constrained('suppliers')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->string('code');
            $table->tinyInteger('status')->default(1);
            $table->integer('total_goods');
            $table->integer('discount');
            $table->integer('supplier_payments');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void{
        Schema::dropIfExists('import_goods');
    }
};
