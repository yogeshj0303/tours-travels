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
        // Check if the galleries table does not exist
        if (!Schema::hasTable('galleries')) {
            Schema::create('galleries', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('gallery_type');
                $table->string('gallery_photo')->nullable(); // Allow null values
                $table->text('gallery_video')->nullable(); // Allow null values
                $table->string('gallery_location_id');
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // Drop the galleries table if it exists
        Schema::dropIfExists('galleries');
    }
};
