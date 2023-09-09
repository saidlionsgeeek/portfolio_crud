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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("image_cover");
            $table->string("skil_one");
            $table->string("skil_two");
            $table->string("skil_three");
            $table->string("skil_four");
            $table->string("twitter");
            $table->string("facebook");
            $table->string("instagram");
            $table->string("skype");
            $table->string("linkdin");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
