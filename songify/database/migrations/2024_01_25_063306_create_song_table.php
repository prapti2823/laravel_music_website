<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id('songid');
            $table->text('songimage');
            $table->text('songname');
            $table->text('songpath');
            $table->string('duration', 8);
            $table->date('releasedate');
            // $table->id('artistid')->unsigned();;
            //$table->id('categoryid')->unsigned();;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song');
    }
};
