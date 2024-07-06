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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->ScateId();
            $table->unsignedBigInteger('CateId');
            $table->string('ScateName');
            $table->string('ScateNameAmharic');
            $table->date('ScateDate');
            $table->date('ScateModify');
            $table->boolean('ScateStatus');
            $table->foreign('CateId')->references('CateId')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
