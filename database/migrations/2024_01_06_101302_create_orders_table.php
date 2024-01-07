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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('order_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('post_code')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->text('order_notes')->nullable();
            $table->integer('total_amount');
            $table->enum('payment_status', ['Paid', 'Unpaid'])->default('Unpaid');
            $table->string('payment_method')->nullable();
            $table->enum('status', ['New', 'Processing', 'On Delivery', 'Delivered', 'Cancelled'])->default('New');
            $table->string('snaptoken')->nullable();
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
