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
        Schema::create('real_states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->enum('real_state_type', ['house', 'department', 'land', 'commercial_ground'] );
            $table->string('street', 128);
            $table->string('external_number');
            $table->string('internal_number')->nullable();
            $table->string('neighborhood', 128);
            $table->string('city', 64);
            $table->string('country', 64);
            $table->integer('rooms')->unsigned();
            $table->float('bathrooms')->unsigned();
            $table->string('comments', 128);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_states');
    }
};
