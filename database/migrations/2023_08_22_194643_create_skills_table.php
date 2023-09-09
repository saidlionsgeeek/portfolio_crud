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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->longText("info");
            $table->string("skill1");
            $table->integer("n1");
            $table->string("skill2");
            $table->integer("n2");
            $table->string("skill3");
            $table->integer("n3");
            $table->string("skill4");
            $table->integer("n4");
            $table->string("skill5");
            $table->integer("n5");
            $table->string("skill6");
            $table->integer("n6");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
