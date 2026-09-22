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
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->string('orders_uuid', 36);
            $table->string('company_uuid', 36)->nullable();
            $table->string('name');
            $table->text('comment');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->string('photo_profile')->nullable();
            $table->enum('status', ['active', 'nonactive'])->default('active');
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_anonymous')->default(0);
            $table->timestamps();
            $table->string('deleted_by', 36)->nullable();
            $table->softDeletes();

            // Foreign keys
            $table->foreign('orders_uuid')->references('uuid')->on('orders')->onDelete('cascade');
            $table->foreign('company_uuid')->references('uuid')->on('companies')->onDelete('set null');
            $table->foreign('deleted_by')->references('uuid')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimoni');
    }
};
