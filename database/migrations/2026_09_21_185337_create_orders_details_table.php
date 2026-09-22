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
        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->string('user_uuid', 36);
            $table->string('orders_uuid', 36);
            $table->string('name');
            $table->text('descriptions')->nullable();
            $table->decimal('value', 15, 2)->default(0);
            $table->timestamps();
            $table->string('deleted_by', 36)->nullable();
            $table->softDeletes();

            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('orders_uuid')->references('uuid')->on('orders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders_details');
    }
};
