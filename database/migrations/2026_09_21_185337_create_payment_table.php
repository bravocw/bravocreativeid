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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->string('user_uuid', 36);
            $table->string('orders_uuid', 36);
            $table->enum('payment_type', ['dp', 'termin1', 'termin2', 'pelunasan', 'additional']);
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('reference')->nullable();
            $table->decimal('ammount', 15, 2);
            $table->string('payment_method')->nullable();
            $table->enum('status', ['pending', 'success', 'failed', 'renew'])->default('pending');
            $table->text('payment_url')->nullable();
            $table->string('va_number')->nullable();
            $table->text('qris_string')->nullable();
            $table->text('return_url')->nullable();
            $table->timestamps();
            $table->string('deleted_by', 36)->nullable();
            $table->softDeletes();

            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('orders_uuid')->references('uuid')->on('orders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
