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
            $table->string('uuid', 36)->unique();
            $table->string('user_uuid', 36);
            $table->string('company_uuid', 36)->nullable();
            $table->string('invoice')->unique();
            $table->enum('type', ['website', 'application', 'video_editing', 'graphic_design']);
            $table->text('descriptions')->nullable();
            $table->decimal('project_value', 15, 2)->default(0);
            $table->timestamps();
            $table->string('deleted_by', 36)->nullable();
            $table->softDeletes();

            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('company_uuid')->references('uuid')->on('companies')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
