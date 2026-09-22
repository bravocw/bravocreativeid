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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->string('user_uuid', 36);
            $table->string('institutions_name');
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->enum('status', ['active', 'nonactive'])->default('active');
            $table->timestamps();
            $table->string('deleted_by', 36)->nullable();
            $table->softDeletes();

            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
