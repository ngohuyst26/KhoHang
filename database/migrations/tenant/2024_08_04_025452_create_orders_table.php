<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('grand_total');
            $table->enum('order_status',[0,1])->default(1);
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('shipping_status')->nullable();
            $table->string('currency')->nullable();
            $table->text('notes')->nullable();

            $table->foreignId('customer_id')
                    ->nullable()
                    ->constrained('customers')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();

            $table->foreignId('user_create_id')
                    ->nullable()
                    ->constrained('users')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();

            $table->foreignId('users')
                    ->nullable()
                    ->constrained('customers')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
