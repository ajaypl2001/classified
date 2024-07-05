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
        Schema::create('categories', function (Blueprint $table) {
            $table->CateId();
            $table->string('CateName');
            $table->string('CateNameAmahric');
            $table->string('CateIcon');
            $table->string('CateImage');
            $table->date('CateDate');
            $table->date('CateModify');
            $table->boolean('CateStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
