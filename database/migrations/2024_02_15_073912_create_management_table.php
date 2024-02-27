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
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->string('carname');
            $table->string('carcompany');
            $table->string('carmodel');
            $table->string('car-image');
            $table->timestamps();
        });

        return redirect('management/create')->with('status','Added');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management');
    }
};
